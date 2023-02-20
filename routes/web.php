<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Programs
Route::prefix('backend/program')->name('backend.program.')->middleware('auth')->group(function(){
    Route:: get('/trash',[\App\Http\Controllers\backend\ProgramController::class,'trash'])->name('trash');
    Route:: post('/restore/{id} ',[\App\Http\Controllers\backend\ProgramController::class,'restore'])->name('restore');
    Route:: delete ('/force_delete/{id}',[\App\Http\Controllers\backend\ProgramController::class,'permanentDelete'])->name('force_delete');
    Route::get('/create',[\App\Http\Controllers\backend\ProgramController::class,'create'])->name('create');
    Route:: post('',[\App\Http\Controllers\backend\ProgramController::class,'store'])->name('store');
    Route::get('',[\App\Http\Controllers\backend\ProgramController::class,'index'])->name('index');
    Route:: get('/{id}',[\App\Http\Controllers\backend\ProgramController::class,'show'])->name('show');
    Route:: delete('/{id}',[\App\Http\Controllers\backend\ProgramController::class,'destroy'])->name('destroy');
    Route:: get('/{id}/edit',[\App\Http\Controllers\backend\ProgramController::class,'edit'])->name('edit');
    Route:: put('ag/{id}',[\App\Http\Controllers\backend\ProgramController::class,'update'])->name('update');
});

//Courses
Route::prefix('backend/course')->name('backend.course.')->middleware('auth')->group(function(){
    Route:: get('/trash',[\App\Http\Controllers\backend\CourseController::class,'trash'])->name('trash');
    Route:: post('/restore/{id} ',[\App\Http\Controllers\backend\CourseController::class,'restore'])->name('restore');
    Route:: delete ('/force_delete/{id}',[\App\Http\Controllers\backend\CourseController::class,'permanentDelete'])->name('force_delete');
    Route::get('/create',[\App\Http\Controllers\backend\CourseController::class,'create'])->name('create');
    Route:: post('',[\App\Http\Controllers\backend\CourseController::class,'store'])->name('store');
    Route::get('',[\App\Http\Controllers\backend\CourseController::class,'index'])->name('index');
    Route:: get('/{id}',[\App\Http\Controllers\backend\CourseController::class,'show'])->name('show');
    Route:: delete('/{id}',[\App\Http\Controllers\backend\CourseController::class,'destroy'])->name('destroy');
    Route:: get('/{id}/edit',[\App\Http\Controllers\backend\CourseController::class,'edit'])->name('edit');
    Route:: put('/{id}',[\App\Http\Controllers\backend\CourseController::class,'update'])->name('update');
});

//Language Tools
Route::prefix('backend/language_tools_project')->name('backend.language_tools_project.')->middleware('auth')->group(function(){
    Route:: get('/trash',[\App\Http\Controllers\backend\LanguageToolsProjectController::class,'trash'])->name('trash');
    Route:: post('/restore/{id} ',[\App\Http\Controllers\backend\LanguageToolsProjectController::class,'restore'])->name('restore');
    Route:: delete ('/force_delete/{id}',[\App\Http\Controllers\backend\LanguageToolsProjectController::class,'permanentDelete'])->name('force_delete');
    Route::get('/create',[\App\Http\Controllers\backend\LanguageToolsProjectController::class,'create'])->name('create');
    Route:: post('',[\App\Http\Controllers\backend\LanguageToolsProjectController::class,'store'])->name('store');
    Route::get('',[\App\Http\Controllers\backend\LanguageToolsProjectController::class,'index'])->name('index');
    Route:: get('/{id}',[\App\Http\Controllers\backend\LanguageToolsProjectController::class,'show'])->name('show');
    Route:: delete('/{id}',[\App\Http\Controllers\backend\LanguageToolsProjectController::class,'destroy'])->name('destroy');
    Route:: get('/{id}/edit',[\App\Http\Controllers\backend\LanguageToolsProjectController::class,'edit'])->name('edit');
    Route:: put('/{id}',[\App\Http\Controllers\backend\LanguageToolsProjectController::class,'update'])->name('update');
});

//batches

Route::prefix('backend/batch')->name('backend.batch.')->middleware('auth')->group(function(){
    Route:: get('/trash',[\App\Http\Controllers\backend\BatchController::class,'trash'])->name('trash');
    Route:: post('/restore/{id} ',[\App\Http\Controllers\backend\BatchController::class,'restore'])->name('restore');
    Route:: delete ('/force_delete/{id}',[\App\Http\Controllers\backend\BatchController::class,'permanentDelete'])->name('force_delete');
    Route::get('/create',[\App\Http\Controllers\backend\BatchController::class,'create'])->name('create');
    Route:: post('',[\App\Http\Controllers\backend\BatchController::class,'store'])->name('store');
    Route::get('',[\App\Http\Controllers\backend\BatchController::class,'index'])->name('index');
    Route:: get('/{id}',[\App\Http\Controllers\backend\BatchController::class,'show'])->name('show');
    Route:: delete('/{id}',[\App\Http\Controllers\backend\BatchController::class,'destroy'])->name('destroy');
    Route:: get('/{id}/edit',[\App\Http\Controllers\backend\BatchController::class,'edit'])->name('edit');
    Route:: put('/{id}',[\App\Http\Controllers\backend\BatchController::class,'update'])->name('update');
});

//batch_courses
Route::prefix('backend/batch_course')->name('backend.batch_course.')->middleware('auth')->group(function(){
    Route:: get('/trash',[\App\Http\Controllers\backend\BatchCoursesController::class,'trash'])->name('trash');
    Route:: post('/restore/{id} ',[\App\Http\Controllers\backend\BatchCoursesController::class,'restore'])->name('restore');
    Route:: delete ('/force_delete/{id}',[\App\Http\Controllers\backend\BatchCoursesController::class,'permanentDelete'])->name('force_delete');
    Route::get('/create',[\App\Http\Controllers\backend\BatchCoursesController::class,'create'])->name('create');
    Route:: post('',[\App\Http\Controllers\backend\BatchCoursesController::class,'store'])->name('store');
    Route::get('',[\App\Http\Controllers\backend\BatchCoursesController::class,'index'])->name('index');
    Route:: get('/{id}',[\App\Http\Controllers\backend\BatchCoursesController::class,'show'])->name('show');
    Route:: delete('/{id}',[\App\Http\Controllers\backend\BatchCoursesController::class,'destroy'])->name('destroy');
    Route:: get('/{id}/edit',[\App\Http\Controllers\backend\BatchCoursesController::class,'edit'])->name('edit');
    Route:: put('/{id}',[\App\Http\Controllers\backend\BatchCoursesController::class,'update'])->name('update');
});

//Organizations
Route::prefix('backend/organizations')->name('backend.organizations.')->middleware('auth')->group(function(){
    Route:: get('/trash',[\App\Http\Controllers\backend\OrganizationController::class,'trash'])->name('trash');
    Route:: post('/restore/{id} ',[\App\Http\Controllers\backend\OrganizationController::class,'restore'])->name('restore');
    Route:: delete ('/force_delete/{id}',[\App\Http\Controllers\backend\OrganizationController::class,'permanentDelete'])->name('force_delete');
    Route::get('/create',[\App\Http\Controllers\backend\OrganizationController::class,'create'])->name('create');
    Route:: post('',[\App\Http\Controllers\backend\OrganizationController::class,'store'])->name('store');
    Route::get('',[\App\Http\Controllers\backend\OrganizationController::class,'index'])->name('index');
    Route:: get('/{id}',[\App\Http\Controllers\backend\OrganizationController::class,'show'])->name('show');
    Route:: delete('/{id}',[\App\Http\Controllers\backend\OrganizationController::class,'destroy'])->name('destroy');
    Route:: get('/{id}/edit',[\App\Http\Controllers\backend\OrganizationController::class,'edit'])->name('edit');
    Route:: put('/{id}',[\App\Http\Controllers\backend\OrganizationController::class,'update'])->name('update');
});

//students
Route::prefix('backend/student')->name('backend.student.')->middleware('auth')->group(function(){
    Route:: get('/trash',[\App\Http\Controllers\backend\StudentController::class,'trash'])->name('trash');
    Route:: post('/restore/{id} ',[\App\Http\Controllers\backend\StudentController::class,'restore'])->name('restore');
    Route:: delete ('/force_delete/{id}',[\App\Http\Controllers\backend\StudentController::class,'permanentDelete'])->name('force_delete');
    Route::get('/create',[\App\Http\Controllers\backend\StudentController::class,'create'])->name('create');
    Route:: post('',[\App\Http\Controllers\backend\StudentController::class,'store'])->name('store');
    Route::get('',[\App\Http\Controllers\backend\StudentController::class,'index'])->name('index');
    Route:: get('/{id}',[\App\Http\Controllers\backend\StudentController::class,'show'])->name('show');
    Route:: delete('/{id}',[\App\Http\Controllers\backend\StudentController::class,'destroy'])->name('destroy');
    Route:: get('/{id}/edit',[\App\Http\Controllers\backend\StudentController::class,'edit'])->name('edit');
    Route:: put('/{id}',[\App\Http\Controllers\backend\StudentController::class,'update'])->name('update');
});

//projects
Route::prefix('backend/project')->name('backend.project.')->middleware('auth')->group(function(){
    Route:: get('/trash',[\App\Http\Controllers\backend\ProjectController::class,'trash'])->name('trash')->middleware('check_admin');;
    Route:: post('/restore/{id} ',[\App\Http\Controllers\backend\ProjectController::class,'restore'])->name('restore');
    Route:: delete ('/force_delete/{id}',[\App\Http\Controllers\backend\ProjectController::class,'permanentDelete'])->name('force_delete');
    Route::get('/create',[\App\Http\Controllers\backend\ProjectController::class,'create'])->name('create')->middleware('check_admin');
    Route:: post('',[\App\Http\Controllers\backend\ProjectController::class,'store'])->name('store');
    Route::get('',[\App\Http\Controllers\backend\ProjectController::class,'index'])->name('index');
    Route:: get('/{id}',[\App\Http\Controllers\backend\ProjectController::class,'show'])->name('show');
    Route:: delete('/{id}',[\App\Http\Controllers\backend\ProjectController::class,'destroy'])->name('destroy')->middleware('check_admin');;
    Route:: get('/{id}/edit',[\App\Http\Controllers\backend\ProjectController::class,'edit'])->name('edit')->middleware('check_admin');;
    Route:: put('/{id}',[\App\Http\Controllers\backend\ProjectController::class,'update'])->name('update');
});
Route::prefix('backend/evaluation_criteria')->name('backend.evaluation_criteria.')->middleware(['auth','check_admin'])->group(function(){
    Route:: get('/trash',[\App\Http\Controllers\backend\EvaluationCriteriaController::class,'trash'])->name('trash');
    Route:: post('/restore/{id} ',[\App\Http\Controllers\backend\EvaluationCriteriaController::class,'restore'])->name('restore');
    Route:: delete ('/force_delete/{id}',[\App\Http\Controllers\backend\EvaluationCriteriaController::class,'permanentDelete'])->name('force_delete');
    Route::get('/create',[\App\Http\Controllers\backend\EvaluationCriteriaController::class,'create'])->name('create');
    Route:: post('',[\App\Http\Controllers\backend\EvaluationCriteriaController::class,'store'])->name('store');
    Route::get('',[\App\Http\Controllers\backend\EvaluationCriteriaController::class,'index'])->name('index');
    Route:: get('/{id}',[\App\Http\Controllers\backend\EvaluationCriteriaController::class,'show'])->name('show');
    Route:: delete('/{id}',[\App\Http\Controllers\backend\EvaluationCriteriaController::class,'destroy'])->name('destroy');
    Route:: get('/{id}/edit',[\App\Http\Controllers\backend\EvaluationCriteriaController::class,'edit'])->name('edit');
    Route:: put('/{id}',[\App\Http\Controllers\backend\EvaluationCriteriaController::class,'update'])->name('update');
});
Route::prefix('backend/supervisor_type')->name('backend.supervisor_type.')->middleware('auth')->group(function(){
    Route:: get('/trash',[\App\Http\Controllers\backend\SupervisorTypeController::class,'trash'])->name('trash')->middleware('check_admin');
    Route:: post('/restore/{id} ',[\App\Http\Controllers\backend\SupervisorTypeController::class,'restore'])->name('restore');
    Route:: delete ('/force_delete/{id}',[\App\Http\Controllers\backend\SupervisorTypeController::class,'permanentDelete'])->name('force_delete');
    Route::get('/create',[\App\Http\Controllers\backend\SupervisorTypeController::class,'create'])->name('create')->middleware('check_admin');
    Route:: post('',[\App\Http\Controllers\backend\SupervisorTypeController::class,'store'])->name('store');
    Route::get('',[\App\Http\Controllers\backend\SupervisorTypeController::class,'index'])->name('index');
    Route:: get('/{id}',[\App\Http\Controllers\backend\SupervisorTypeController::class,'show'])->name('show');
    Route:: delete('/{id}',[\App\Http\Controllers\backend\SupervisorTypeController::class,'destroy'])->name('destroy')->middleware('check_admin');
    Route:: get('/{id}/edit',[\App\Http\Controllers\backend\SupervisorTypeController::class,'edit'])->name('edit')->middleware('check_admin');
    Route:: put('/{id}',[\App\Http\Controllers\backend\SupervisorTypeController::class,'update'])->name('update');
});
Route::prefix('backend/supervisor')->name('backend.supervisor.')->middleware('auth')->group(function(){
    Route:: get('/trash',[\App\Http\Controllers\backend\SupervisorController::class,'trash'])->name('trash')->middleware('check_admin');;
    Route:: post('/restore/{id} ',[\App\Http\Controllers\backend\SupervisorController::class,'restore'])->name('restore');
    Route:: delete ('/force_delete/{id}',[\App\Http\Controllers\backend\SupervisorController::class,'permanentDelete'])->name('force_delete');
    Route::get('/create',[\App\Http\Controllers\backend\SupervisorController::class,'create'])->name('create')->middleware('check_admin');
    Route:: post('',[\App\Http\Controllers\backend\SupervisorController::class,'store'])->name('store');
    Route::get('',[\App\Http\Controllers\backend\SupervisorController::class,'index'])->name('index');
    Route:: get('/{id}',[\App\Http\Controllers\backend\SupervisorController::class,'show'])->name('show');
    Route:: delete('/{id}',[\App\Http\Controllers\backend\SupervisorController::class,'destroy'])->name('destroy')->middleware('check_admin');
    Route:: get('/{id}/edit',[\App\Http\Controllers\backend\SupervisorController::class,'edit'])->name('edit')->middleware('check_admin');
    Route:: put('/{id}',[\App\Http\Controllers\backend\SupervisorController::class,'update'])->name('update');
});

Route::prefix('backend/course_evaluation_criteria')->name('backend.course_evaluation_criteria.')->middleware('auth')->group(function(){
    Route:: get('/trash',[\App\Http\Controllers\backend\CourseEvaluationCriteriaController::class,'trash'])->name('trash');
    Route:: post('/restore/{id} ',[\App\Http\Controllers\backend\CourseEvaluationCriteriaController::class,'restore'])->name('restore');
    Route:: delete ('/force_delete/{id}',[\App\Http\Controllers\backend\CourseEvaluationCriteriaController::class,'permanentDelete'])->name('force_delete');
    Route::get('/create',[\App\Http\Controllers\backend\CourseEvaluationCriteriaController::class,'create'])->name('create')->middleware('check_admin');;
    Route:: post('',[\App\Http\Controllers\backend\CourseEvaluationCriteriaController::class,'store'])->name('store');
    Route::get('',[\App\Http\Controllers\backend\CourseEvaluationCriteriaController::class,'index'])->name('index');
    Route:: get('/{id}',[\App\Http\Controllers\backend\CourseEvaluationCriteriaController::class,'show'])->name('show');
    Route:: delete('/{id}',[\App\Http\Controllers\backend\CourseEvaluationCriteriaController::class,'destroy'])->name('destroy')->middleware('check_admin');;
    Route:: get('/{id}/edit',[\App\Http\Controllers\backend\CourseEvaluationCriteriaController::class,'edit'])->name('edit')->middleware('check_admin');;
    Route:: put('/{id}',[\App\Http\Controllers\backend\CourseEvaluationCriteriaController::class,'update'])->name('update');
});
Route::prefix('backend/project_tool')->name('backend.project_tool.')->middleware('auth')->group(function(){
    Route:: get('/trash',[\App\Http\Controllers\backend\ProjectToolController::class,'trash'])->name('trash');
    Route:: post('/restore/{id} ',[\App\Http\Controllers\backend\ProjectToolController::class,'restore'])->name('restore');
    Route:: delete ('/force_delete/{id}',[\App\Http\Controllers\backend\ProjectToolController::class,'permanentDelete'])->name('force_delete');
    Route::get('/create',[\App\Http\Controllers\backend\ProjectToolController::class,'create'])->name('create');
    Route:: post('',[\App\Http\Controllers\backend\ProjectToolController::class,'store'])->name('store');
    Route::get('',[\App\Http\Controllers\backend\ProjectToolController::class,'index'])->name('index');
    Route:: get('/{id}',[\App\Http\Controllers\backend\ProjectToolController::class,'show'])->name('show');
    Route:: delete('/{id}',[\App\Http\Controllers\backend\ProjectToolController::class,'destroy'])->name('destroy');
    Route:: get('/{id}/edit',[\App\Http\Controllers\backend\ProjectToolController::class,'edit'])->name('edit');
    Route:: put('/{id}',[\App\Http\Controllers\backend\ProjectToolController::class,'update'])->name('update');
});
Route::prefix('backend/student_project')->name('backend.student_project.')->middleware('auth')->group(function(){
    Route:: get('/trash',[\App\Http\Controllers\backend\Student_ProjectController::class,'trash'])->name('trash');
    Route:: post('/restore/{id} ',[\App\Http\Controllers\backend\Student_ProjectController::class,'restore'])->name('restore');
    Route:: delete ('/force_delete/{id}',[\App\Http\Controllers\backend\Student_ProjectController::class,'permanentDelete'])->name('force_delete');
    Route::get('/create',[\App\Http\Controllers\backend\Student_ProjectController::class,'create'])->name('create');
    Route:: post('',[\App\Http\Controllers\backend\Student_ProjectController::class,'store'])->name('store');
    Route::get('',[\App\Http\Controllers\backend\Student_ProjectController::class,'index'])->name('index');
    Route:: get('/{id}',[\App\Http\Controllers\backend\Student_ProjectController::class,'show'])->name('show');
    Route:: delete('/{id}',[\App\Http\Controllers\backend\Student_ProjectController::class,'destroy'])->name('destroy');
    Route:: get('/{id}/edit',[\App\Http\Controllers\backend\Student_ProjectController::class,'edit'])->name('edit');
    Route:: put('/{id}',[\App\Http\Controllers\backend\Student_ProjectController::class,'update'])->name('update');
});
//log_sheet
Route::prefix('backend/log_sheet')->name('backend.log_sheet.')->middleware('auth')->group(function(){
    Route:: get('/trash',[\App\Http\Controllers\backend\LogSheetController::class,'trash'])->name('trash');
    Route:: post('/restore/{id} ',[\App\Http\Controllers\backend\LogSheetController::class,'restore'])->name('restore');
    Route:: delete ('/force_delete/{id}',[\App\Http\Controllers\backend\LogSheetController::class,'permanentDelete'])->name('force_delete');
    Route::get('/create',[\App\Http\Controllers\backend\LogSheetController::class,'create'])->name('create');
    Route:: post('',[\App\Http\Controllers\backend\LogSheetController::class,'store'])->name('store');
    Route::get('',[\App\Http\Controllers\backend\LogSheetController::class,'index'])->name('index');
    Route:: get('/{id}',[\App\Http\Controllers\backend\LogSheetController::class,'show'])->name('show');
    Route:: delete('/{id}',[\App\Http\Controllers\backend\LogSheetController::class,'destroy'])->name('destroy');
    Route:: get('/{id}/edit',[\App\Http\Controllers\backend\LogSheetController::class,'edit'])->name('edit');
    Route:: put('/{id}',[\App\Http\Controllers\backend\LogSheetController::class,'update'])->name('update');
});
Route::prefix('backend/evaluation')->name('backend.evaluation.')->middleware('auth')->group(function(){
    Route:: get('/trash',[\App\Http\Controllers\backend\EvaluationController::class,'trash'])->name('trash');
    Route:: post('/restore/{id} ',[\App\Http\Controllers\backend\EvaluationController::class,'restore'])->name('restore');
    Route:: delete ('/force_delete/{id}',[\App\Http\Controllers\backend\EvaluationController::class,'permanentDelete'])->name('force_delete');
    Route::get('/create',[\App\Http\Controllers\backend\EvaluationController::class,'create'])->name('create')->middleware('check_admin');;
    Route:: post('',[\App\Http\Controllers\backend\EvaluationController::class,'store'])->name('store');
    Route::get('',[\App\Http\Controllers\backend\EvaluationController::class,'index'])->name('index');
    Route:: get('/{id}',[\App\Http\Controllers\backend\EvaluationController::class,'show'])->name('show');
    Route:: delete('/{id}',[\App\Http\Controllers\backend\EvaluationController::class,'destroy'])->name('destroy')->middleware('check_admin');;
    Route:: get('/{id}/edit',[\App\Http\Controllers\backend\EvaluationController::class,'edit'])->name('edit')->middleware('check_admin');;
    Route:: put('/{id}',[\App\Http\Controllers\backend\EvaluationController::class,'update'])->name('update');
});

//dashboard
Route::prefix('backend/dashboard')->name('backend.dashboard.')->group(function(){
    Route::get('',[\App\Http\Controllers\backend\DashboardController::class,'index'])->name('index');
});

//Student
Route::prefix('student/home')->name('student.home.')->group(function(){
    Route::get('/{id}',[\App\Http\Controllers\Student\StudentController::class,'index'])->name('index');
    Route:: post('',[\App\Http\Controllers\Student\StudentController::class,'store'])->name('store');
    Route:: put('/{id}',[\App\Http\Controllers\Student\StudentController::class,'update'])->name('update');
});

Route:: get('frontend/student/register',[\App\Http\Controllers\frontend\StudentController::class,'registerForm'])->name('frontend.student.register');
Route:: post('frontend/student/register',[\App\Http\Controllers\frontend\StudentController::class,'register'])->name('frontend.student.doregister');



