<?php

use App\Livewire\CartPage;
use App\Livewire\Homepage;
use App\Livewire\MenuPage;
use App\Livewire\StorePage;
use App\Livewire\HistoryPage;
use App\Livewire\SuccessPage;
use App\Livewire\JuiceLabPage;
use App\Livewire\ContactUsPage;
use App\Livewire\Auth\LoginPage;
use App\Livewire\FruitStatsPage;
use App\Livewire\Auth\RegisterPage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Livewire\Auth\ResetPasswordPage;
use App\Livewire\Auth\ForgotPasswordPage;
use App\Livewire\CheckoutPage;
use App\Livewire\OrderDetail;
use App\Livewire\ProfilePage;

Route::get('/', Homepage::class)->name('homepage');
Route::get('/menu', MenuPage::class);
Route::get('/contact-us', ContactUsPage::class);
Route::get('/fruitstats', FruitStatsPage::class);
Route::get('/history', HistoryPage::class);
Route::get('/juicelab', JuiceLabPage::class);
Route::get('/store', StorePage::class);


Route::middleware('guest')->group(function() {
  Route::get('/login', LoginPage::class)->name('login');
  Route::get('/register', RegisterPage::class);
  Route::get('/forgot', ForgotPasswordPage::class)->name('password.request');
  Route::get('/reset/{token}', ResetPasswordPage::class)->name('password.reset');
});


Route::middleware('auth')->group(function () {
  Route::get('/success', SuccessPage::class)->name('success');
  Route::get('/cart', CartPage::class);
  Route::get('/history', HistoryPage::class);
  Route::get('/history/{order_id}', OrderDetail::class)->name('history.show');
  Route::get('/checkout', CheckoutPage::class);
  Route::get('/profile', ProfilePage::class);
  Route::get('/logout', function() {
    Auth::logout();
    return redirect('/');
  });
});