<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ActivitiesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProjectcompletedController;
use App\Http\Controllers\ServicesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('welcome');
Route::resource('about', AboutController::class);
Route::resource('contact', ContactController::class);
Route::resource('activities', ActivitiesController::class);
Route::resource('product', ProductController::class);

Route::get('history', [HistoryController::class, 'index'])->name('history.index');
Route::get('services', [ServicesController::class, 'index'])->name('services.index');

Route::get('project-list', [ProjectcompletedController::class, 'index'])->name('project_list');
Route::resource('project', ProjectcompletedController::class);
Route::get('list_project', [ProjectcompletedController::class, 'listProjects'])->name('list_project');