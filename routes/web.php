<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\landingPageController;
use App\Http\Controllers\FundsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\LoansController;


//route to landing page
Route::get('/', function(){
    return view('landingPage');
});

Route::get('/landing', function () {
    return view('landingPage');
})->name('landing.page');

//route to creating user
Route::get('/users/create', [UsersController::class, 'create'])->name('users.create');
Route::post('/users/store', [UsersController::class, 'store'])->name('users.store');

//route to creating user for specific fund in fund manager
Route::get('/users/create/{id}', [UsersController::class, 'createUserInFund'])->name('users.storeFundId');
//route to show fund members
Route::get('users/showMembers/{id}', [FundsController::class, 'showMembers'])->name('users.showMembers');




//route to creating fund
Route::get('/makeFund', function () {
    return view('makeFund');
})->name('makeFund');



// Route to show all fund
Route::get('/fund', [FundsController::class, 'index'])->name('showFunds');

// Route to manage a specific fund
Route::get('/fund/{id}', [FundsController::class, 'show'])->name('manageFund');


// Route to create a new fund
Route::get('/fund/create', [FundsController::class, 'create'])->name('fund.create');
Route::post('/fund', [FundsController::class, 'store'])->name('fund.store');

//route for deleting fund
Route::delete('fund/{id}' , [FundsController::class, 'destroy'])->name('deleteFund');

//route to application for loan
Route::get('/create/loan' ,[LoansController::class, 'create'])->name('loan.create');
Route::post('/store/loan', [LoansController::class, 'store'])->name('loan.store');

















// Route::get('/db-test', function () {  //cehck for database connection
//     try {
//         $sessions = DB::table('sessions')->get();
//         return 'Connected to the database. Number of sessions: ' . $sessions->count();
//     } catch (\Exception $e) {
//         return 'Connection failed: ' . $e->getMessage();
//     }
// });



