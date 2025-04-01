<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;



// Route::get('/', [HomeController::class, 'index']);
Route::resource('/', HomeController::class);



// Route::get('user/{id}', ShowProfile::class);


// Route::get('/category', function () {
//     return redirect('home')->with('status', 'Reza');
// });
