<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\VoterController;
use App\Models\Position;
use App\Models\Candidate;
use App\Models\Voter;


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
//Route to Dashboard
Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function (){
    return view('login');
});

Route::get('/signup', function (){
    return view('signup');
});
Route::get('/candidates/create', function (){
    $positions = Position::all();
    return view('candidate.create', compact(['positions']));
});
Route::get('/positions/create', function (){
    return view('position.create');
});

// Position

Route::post('/acceptRegistration', [userController::class, 'saveRegistration'])->name('saveRegistration');
Route::post('/userAuthentication', [userController::class, 'userAuth'])->name('userAuth');  
Route::post('/createPosition', [PositionController::class, 'store'])->name('createPosition');
Route::post('/createCandidate', [CandidateController::class, 'createCandidate'])->name('createCandidate');
Route::get('/registeredVoters', [VoterController::class, 'regVoters'])->name('regVoters');
