<?php

use App\Http\Controllers\ContractController;
use App\Http\Controllers\DoctorDataEnController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\JoinusController;
// use App\Mail\ContractMail;
use Illuminate\Support\Facades\Route;
// use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return view('welcome');
});




Route::middleware(['clear.contract.session'])->group(function () {

Route::get('/', [JoinusController::class, 'showEnglishForm'])->name('english.form');
Route::post('/doctorDataAr/store', [JoinusController::class,'submitForm'])->name('arabic.form.store');
Route::post('/doctorDataEn/store', [JoinusController::class,'submitForm'])->name('english.form.store');
Route::get('/arabic', [JoinusController::class,'showArabicForm'])->name('arabic.form');

});
Route::get('/contract/arabic', [ContractController::class,'showContractArabic'])->name('arabic.contract');
Route::get('/contract', [ContractController::class,'ShowContractEnglish'])->name('english.contract');
Route::post('/submit-form', [ContractController::class, 'submitContract'])->name('submit.contract');
// Mail::to('ym3243629@gmail.com')->send(new ContractMail());



// Route::get('/cc', [ContractController::class,'editPdfData']);



