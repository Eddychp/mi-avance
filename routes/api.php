<?php

use App\Http\Controllers\AnnouncementsController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContestantController;
use App\Http\Controllers\InvestigationController;
use App\Http\Controllers\ObservationController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TemplateController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::apiResource('/categories',CategoryController::class);
Route::apiResource('/areas',AreaController::class);
Route::apiResource('/investigations',InvestigationController::class);
Route::apiResource('/results',ResultController::class);
Route::apiResource('/contestants',ContestantController::class);
Route::apiResource('/observations',ObservationController::class);
Route::apiResource('/students', StudentController::class);
Route::apiResource('/articles', ArticleController::class);
Route::apiResource('/templates', TemplateController::class);
<<<<<<< HEAD
Route::apiResource('/investigations', InvestigationController::class);

=======
Route::apiResource('/announcements', AnnouncementsController::class);
>>>>>>> 08dfa07482f26aedec1acc3259f5d2843a327bb8
