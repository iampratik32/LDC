<?php

use App\Http\Controllers\ViewerController;
use Illuminate\Support\Facades\Route;

Route::get('/',[\App\Http\Controllers\IndexController::class,'index']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/contact',[\App\Http\Controllers\ContactController::class,'index']);
Route::get('testimonial',[\App\Http\Controllers\TestimonialController::class,'index']);
Route::get('/about', function () {
    return view('about');
});
Route::get('/intellectualDisability', function () {
    return view('intellectual');
});
Route::get('gallery',[\App\Http\Controllers\ViewGalleryController::class,'index']);

Route::get('/admin',[\App\Http\Controllers\AdminController::class,'index']);
Route::get('/admin/gallery',[\App\Http\Controllers\GalleryController::class,'index']);
Route::get('/admin/gallery/{id}',[\App\Http\Controllers\GalleryController::class,'show']);
Route::get('/gallery/create',[\App\Http\Controllers\GalleryController::class,'create']);
Route::get('/admin/gallery/edit/{id}',[\App\Http\Controllers\GalleryController::class,'edit']);
Route::post('/gallery',[\App\Http\Controllers\GalleryController::class,'store']);
Route::delete('/gallery',[\App\Http\Controllers\GalleryController::class,'destroy']);
Route::put('/gallery',[\App\Http\Controllers\GalleryController::class,'update']);
Route::get('/admin/reorder',[\App\Http\Controllers\ReorderController::class,'index']);
Route::post('/reorder',[\App\Http\Controllers\ReorderController::class,'update']);
Route::get('/admin/programs',[\App\Http\Controllers\ProgramController::class,'index']);
Route::get('/admin/program/create',[\App\Http\Controllers\ProgramController::class,'create']);
Route::post('/programmes',[\App\Http\Controllers\ProgramController::class,'store']);
Route::get('/admin/program/{id}',[\App\Http\Controllers\ProgramController::class,'show']);
Route::get('/admin/program/edit/{id}',[\App\Http\Controllers\ProgramController::class,'edit']);
Route::delete('/programmes',[\App\Http\Controllers\ProgramController::class,'destroy']);
Route::put('/programmes',[\App\Http\Controllers\ProgramController::class,'update']);
Route::get('/admin/helps',[\App\Http\Controllers\HelpController::class,'index']);
Route::get('/admin/help/create',[\App\Http\Controllers\HelpController::class,'create']);
Route::post('/help',[\App\Http\Controllers\HelpController::class,'store']);
Route::get('/admin/help/{id}',[\App\Http\Controllers\HelpController::class,'show']);
Route::get('/admin/help/edit/{id}',[\App\Http\Controllers\HelpController::class,'edit']);
Route::delete('/help',[\App\Http\Controllers\HelpController::class,'destroy']);
Route::put('/help',[\App\Http\Controllers\HelpController::class,'update']);
Route::get('/admin/needs',[\App\Http\Controllers\NeedController::class,'index']);
Route::get('/admin/need/create',[\App\Http\Controllers\NeedController::class,'create']);
Route::get('/admin/need/{id}',[\App\Http\Controllers\NeedController::class,'show']);
Route::get('/admin/need/edit/{id}',[\App\Http\Controllers\NeedController::class,'edit']);
Route::post('/need',[\App\Http\Controllers\NeedController::class,'store']);
Route::put('/need',[\App\Http\Controllers\NeedController::class,'update']);
Route::delete('/need',[\App\Http\Controllers\NeedController::class,'destroy']);
Route::get('/admin/objectives',[\App\Http\Controllers\ObjectiveController::class,'index']);
Route::get('/admin/objective/create',[\App\Http\Controllers\ObjectiveController::class,'create']);
Route::get('/admin/objective/{id}',[\App\Http\Controllers\ObjectiveController::class,'show']);
Route::get('/admin/objective/edit/{id}',[\App\Http\Controllers\ObjectiveController::class,'edit']);
Route::post('/objective',[\App\Http\Controllers\ObjectiveController::class,'store']);
Route::put('/objective',[\App\Http\Controllers\ObjectiveController::class,'update']);
Route::delete('/objective',[\App\Http\Controllers\ObjectiveController::class,'destroy']);
Route::get('/admin/testimonial',[\App\Http\Controllers\AdminTestimonialController::class,'index']);
Route::get('/admin/testimonial/create',[\App\Http\Controllers\AdminTestimonialController::class,'create']);
Route::get('/admin/testimonial/{id}',[\App\Http\Controllers\AdminTestimonialController::class,'show']);
Route::get('/admin/testimonial/edit/{id}',[\App\Http\Controllers\AdminTestimonialController::class,'edit']);
Route::post('/testimonial',[\App\Http\Controllers\AdminTestimonialController::class,'store']);
Route::put('/testimonial',[\App\Http\Controllers\AdminTestimonialController::class,'update']);
Route::delete('/testimonial',[\App\Http\Controllers\AdminTestimonialController::class,'destroy']);
Route::get('/admin/tesReorder/',[\App\Http\Controllers\ReorderTestimonialController::class,'index']);
Route::post('/tesReorder',[\App\Http\Controllers\ReorderTestimonialController::class,'update']);

Route::get('/objective',[\App\Http\Controllers\UserObjectiveController::class,'index']);
Route::get('/programmes',[\App\Http\Controllers\UserProgramController::class,'index']);
Route::get('/need',[\App\Http\Controllers\UserNeedController::class,'index']);
Route::get('/help',[\App\Http\Controllers\UserHelpController::class,'index']);
Route::post('/obj',[\App\Http\Controllers\ObjectiveController::class,'other']);
Auth::routes();

Route::get('admin/change',[\App\Http\Controllers\ChangeController::class,'index']);
Route::put('admin/change',[\App\Http\Controllers\ChangeController::class,'update']);


Route::post('/send',[\App\Http\Controllers\ContactController::class,'store']);
Route::get('/contact/sent',[\App\Http\Controllers\ContactController::class,'cIndex']);
Route::get('/admin/viewers',[\App\Http\Controllers\ViewerController::class,'index']);
