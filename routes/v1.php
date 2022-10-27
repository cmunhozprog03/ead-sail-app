<?php

use App\Http\Controllers\Api\{
    CourseApiController,
    LessonApiController,
    ModuleApiController
};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/', function(){
  return response()->json([
    'success' => true,
  ]);
});

Route::get('/courses', [CourseApiController::class, 'index']);
Route::get('/courses/{id}', [CourseApiController::class, 'show']);

Route::get('/courses/{id}/modules', [ModuleApiController::class, 'index']);

Route::get('/modules/{id}/lessons', [LessonApiController::class, 'index']);
Route::get('/lessons/{id}', [LessonApiController::class, 'show']);