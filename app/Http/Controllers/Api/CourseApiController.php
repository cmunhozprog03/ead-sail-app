<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CourseApiResource;
use App\Repositories\CourseRepository;
use Illuminate\Http\Request;

class CourseApiController extends Controller
{
    protected $repository;

    public function __construct(CourseRepository $couseRepository)
    {
        $this->repository = $couseRepository;
    }

    public function index()
    {
        return CourseApiResource::collection($this->repository->getAllCourses());;
    }


    public function show($id)
    {
        
        return new CourseApiResource($this->repository->getCourse($id));
    }


}
