<?php

use App\Http\Controllers\ContactController;
use App\Mail\contact;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

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
    return view('index');
});

Route::get('/download-resume', function () {
    return response()->download("pdf/herring_robert_resume.pdf");
});

Route::post('/contact-me', [ContactController::class, 'sendMail'])->name('contact.me');

Route::get('send-mail', function () {

    $details = [
        'title' => 'Mail from Robert-Herring.com',
        'body' => 'This is for testing email using smtp'
    ];

    Mail::to('rherring@fish-graphics.com')->send(new contact($details));

    dd("Email is Sent.");
});
