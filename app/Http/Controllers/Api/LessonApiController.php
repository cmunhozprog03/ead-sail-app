<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\LessonApiResource;
use App\Repositories\LessonRepository;
use Illuminate\Http\Request;

class LessonApiController extends Controller
{
    protected $repository;

    public function __construct(LessonRepository $lessonRepository)
    {
        $this->repository = $lessonRepository;
    }

    public function index($lessonId)
    {
        $lessons = $this->repository->getLessonsNyModuleId($lessonId);

        return LessonApiResource::collection($lessons);
    }

    public function show($lessonId)
    {
        return new LessonApiResource($this->repository->getLesson($lessonId));
    }
}
