<?php

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use App\Http\Controllers\PostController;
use Spatie\YamlFrontMatter\YamlFrontMatter;

Route::get('/',[PostController::class,'index'])->name('home');

Route::get('posts/{post:slug}',[PostController::class, 'show']);

