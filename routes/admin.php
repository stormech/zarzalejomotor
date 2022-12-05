<?php
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Admin\WelcomeAdmin;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Livewire\Admin\ImagesAdmin;
use App\Http\Controllers\Admin\ImageController;

Route::get('/', WelcomeAdmin::class)->name('admin.index');


Route::resource('roles', RoleController::class)->names('admin.roles');
Route::resource('permissions', PermissionController::class)->names('admin.permissions');
Route::get('images', ImagesAdmin::class)->name('admin.images.index');
Route::post('images/principal/files', [ImagesAdmin::class, 'files'])->name('admin.images.files');
