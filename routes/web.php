<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
 */

Route::post('/email',[EmailController::class, 'envoyer_email'])->name('app.email');
Route::post('/partenaire-email',[EmailController::class, 'partenaire_email'])->name('app.partemail');

Route::get('/my-account', [AppController::class, 'AuthForm'])->name('app.auth');
Route::post('/connect', [AppController::class, 'Authentification'])->name('app.access');
Route::get('/certificat', [GuestController::class, 'index'])->name('app.main');
Route::get('/boutique', [GuestController::class, 'showCertis'])->name('app.certifs');
Route::get('/inscription-partenaire',[GuestController::class,'partenaire'])->name('app.partenaire');
Route::get('/contactez-nous/{title?}',[GuestController::class,'contactez'])->name('app.contactez');
Route::get('/certifications-toutes-les-certifications-microsoft',[GuestController::class,'microsoft'])->name('app.microsoft');
Route::get('/it-specialis',[GuestController::class,'its'])->name('app.its');
Route::get('/adobe',[GuestController::class,'adobe'])->name('app.adobe');
Route::get('/autodesk',[GuestController::class,'autodesk'])->name('app.autodesk');
Route::get('/esb-entrepreneurship-and-small-business',[GuestController::class,'esb'])->name('app.esb');
Route::get('/ic3-digital-literacy-certifications',[GuestController::class,'ic3'])->name('app.ic3');
Route::get('/pmi-project-management-institute',[GuestController::class,'pmi'])->name('app.pmi');
Route::get('/csb-communication-skills-for-business',[GuestController::class,'csb'])->name('app.csb');
Route::get('/eca-ec-council-associates',[GuestController::class,'ecCouncil'])->name('app.ec-council');
Route::get('/ucu-unity-certified-user',[GuestController::class,'unity'])->name('app.unity');

Route::middleware(['auth'])->group(function () {
    Route::get('/deconnecter', [AppController::class, 'Logout'])->name('app.logout');
    Route::get('/certificat-management', [AppController::class, 'showCerti'])->name('app.certi');
    Route::get('/chercher', [AppController::class, 'search'])->name('app.search');
    Route::resource('certifications', AppController::class);
    Route::resource('admins', UserController::class);
});
Route::get('/whatsapp', function () {
    return redirect()->away('https://wa.link/bubsv4');
});
