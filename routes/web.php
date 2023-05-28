<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Http\Controllers\Dashboard\DashboardController::class);

//<--book-category route starts here-->
Route::group(['middleware' => ['auth:web']], function () {
    Route::resource('economic-account', \App\Http\Controllers\EconomicAccountController::class);
    Route::resource('budget', \App\Http\Controllers\BudgetController::class);
    Route::resource('voucher', \App\Http\Controllers\VoucherController::class);
    Route::resource('report', \App\Http\Controllers\ReportController::class);


    Route::post('get-eco-account-data-as-parent', [\App\Http\Controllers\EconomicAccountController::class,'getEcoAccountDataAsParent'])
        ->name('get-eco-account-data-as-parent');

    Route::get('get-eco-account-tree-list',[\App\Http\Controllers\EconomicAccountController::class,'getEcoAccountTreeList'])->name('get-eco-account-tree-list');
    Route::post('budget-status-change',[\App\Http\Controllers\BudgetController::class,'budgetStatusChange'])->name('budget-status-change');

});
