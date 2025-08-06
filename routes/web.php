<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StripeController;

Route::view('/checkout', 'checkout')->name('checkout.view');
Route::post('/checkout', [StripeController::class, 'checkout'])->name('stripe.checkout');
Route::get('/success', function() {
    return 'Pagamento concluído com sucesso!';
})->name('stripe.success'); 

Route::get('/cancel', function() {
    return 'Pagamento cancelado.';
})->name('stripe.cancel');

Route::get('/', function () {
    return view('index');
});
