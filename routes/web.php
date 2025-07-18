<?php

use App\Livewire\Calculator;
use App\Livewire\Counter;
use App\Livewire\Home;
use App\Livewire\Products;
use App\Livewire\Regions;
use App\Livewire\Todo;
use App\Livewire\Ragistration;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');
Route::get('/counter', Counter::class)->name('counter');
Route::get('/calculator', Calculator::class)->name('calculator');
Route::get('/todo', Todo::class)->name('todo');
Route::get('/regions', Regions::class)->name('regions');
Route::get('/products', Products::class)->name('products');
Route::get('/registration', Ragistration::class)->name('registration');
