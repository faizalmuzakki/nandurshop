<?php

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

Route::name('website.')->group(function(){
    Route::view('/', 'website.home.index')->name('index');
    Route::view('/2', 'website.home-2.index')->name('index-2');
    Route::view('/3', 'website.home-3.index')->name('index-3');
    Route::view('/4', 'website.home-4.index')->name('index-4');

    Route::view('/cart', 'website.cart.index')->name('cart');
    Route::view('/checkout', 'website.checkout.index')->name('checkout');
    Route::view('/wishlist', 'website.wishlist.index')->name('wishlist');

    Route::view('/my-account', 'website.my-account.index')->name('my-account');
    Route::view('/login-register', 'website.login-register.index')->name('login-register');
    Route::view('/faq', 'website.faq.index')->name('faq');

    Route::view('/compare', 'website.compare.index')->name('compare');
    Route::view('/contact', 'website.contact.index')->name('contact');
    Route::view('/about', 'website.about.index')->name('about');

    Route::view('/shop-3-column', 'website.shop-3-column.index')->name('shop-3-column');
    Route::view('/shop-4-column', 'website.shop-4-column.index')->name('shop-4-column');
    Route::view('/shop-left-sidebar', 'website.shop-left-sidebar.index')->name('shop-left-sidebar');
    Route::view('/shop-right-sidebar', 'website.shop-right-sidebar.index')->name('shop-right-sidebar');

    Route::view('/shop-list', 'website.shop-list.index')->name('shop-list');
    Route::view('/shop-list-left-sidebar', 'website.shop-list-left-sidebar.index')->name('shop-list-left-sidebar');
    Route::view('/shop-list-right-sidebar', 'website.shop-list-right-sidebar.index')->name('shop-list-right-sidebar');

    Route::view('/single-product', 'website.single-product.index')->name('single-product');
    Route::view('/single-product-variable', 'website.single-product-variable.index')->name('single-product-variable');
    Route::view('/single-product-affiliate', 'website.single-product-affiliate.index')->name('single-product-affiliate');
    Route::view('/single-product-group', 'website.single-product-group.index')->name('single-product-group');
    Route::view('/single-product-tabstyle-2', 'website.single-product-tabstyle-2.index')->name('single-product-tabstyle-2');
    Route::view('/single-product-tabstyle-3', 'website.single-product-tabstyle-3.index')->name('single-product-tabstyle-3');

    Route::view('/single-product-gallery-left', 'website.single-product-gallery-left.index')->name('single-product-gallery-left');
    Route::view('/single-product-gallery-right', 'website.single-product-gallery-right.index')->name('single-product-gallery-right');
    Route::view('/single-product-sticky-left', 'website.single-product-sticky-left.index')->name('single-product-sticky-left');
    Route::view('/single-product-sticky-right', 'website.single-product-sticky-right.index')->name('single-product-sticky-right');
    Route::view('/single-product-slider-box', 'website.single-product-slider-box.index')->name('single-product-slider-box');

    Route::view('/blog-left-sidebar', 'website.blog-left-sidebar.index')->name('blog-left-sidebar');
    Route::view('/blog-right-sidebar', 'website.blog-right-sidebar.index')->name('blog-right-sidebar');
    Route::view('/blog-post-left-sidebar', 'website.blog-post-left-sidebar.index')->name('blog-post-left-sidebar');
    Route::view('/blog-post-right-sidebar', 'website.blog-post-right-sidebar.index')->name('blog-post-right-sidebar');
    Route::view('/blog-post-image-format', 'website.blog-post-image-format.index')->name('blog-post-image-format');
    Route::view('/blog-post-image-gallery', 'website.blog-post-image-gallery.index')->name('blog-post-image-gallery');
    Route::view('/blog-post-audio-format', 'website.blog-post-audio-format.index')->name('blog-post-audio-format');
    Route::view('/blog-post-video-format', 'website.blog-post-video-format.index')->name('blog-post-video-format');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
