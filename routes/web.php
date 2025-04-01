<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Response;



// Route::get('/', [HomeController::class, 'index']);
// Route::resource('/', HomeController::class);



// Route::get('user/{id}', ShowProfile::class);


// Route::get('/category', function () {
//     return redirect('home')->with('status', 'Reza');
// });
// Route::get('/' , function () {
//     return response()->json([
//         'age' => 20,
//         'status' => 'enable',
//     ]);
// });

Route::get('/download', function () {
    $pathToFile = public_path('files/sample.pdf'); // Update with your file path
    $name = 'downloaded_file.pdf'; // Update with desired file name
    $headers = ['Content-Type: application/pdf']; // Update based on file type

    return Response::download($pathToFile, $name, $headers)->deleteFileAfterSend(true);
});