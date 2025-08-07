<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\ContatoController;

Route::controller(StripeController::class)->group(function () {
    Route::post('/checkout', 'checkout')->name('stripe.checkout');
});

Route::get('/cancel', function () {
    return 'Pagamento cancelado.';
})->name('stripe.cancel');

Route::get('/success', function () {
    return 'Pagamento concluído com sucesso!';
})->name('stripe.success');

Route::view('/checkout', 'checkout')->name('checkout.view');

Route::controller(ContatoController::class)->group(function () {
    Route::post('/contato', 'store')->name('contato.store');
});

Route::get('/', function () {
    return view('index');
});
