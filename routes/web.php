<?php

use Illuminate\Support\Facades\Route;

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



Route::group(['prefix' => LaravelLocalization::setLocale(),'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]],function ()
{
    Route::get('/', function () {
        return view('pages.index');
    })->name('home');

    Route::get('about', function () {
        return view('pages.about');
    })->name('about');

    Route::get('contant-us',function (){
        return view('pages.contact');
    })->name('contact');


//services
    Route::get('service-mobile',function (){
        return view('pages.services.servicemobile');
    })->name('mobile');


    Route::get('service-web',function (){
        return view('pages.services.serviceweb');
    })->name('web');

    Route::get('service-branding',function (){
        return view('pages.services.branding');
    })->name('branding');


    Route::get('service-seo',function (){
        return view('pages.services.seo');
    })->name('seo');


    Route::get('service-social-media-management',function (){
        return view('pages.services.socialmediamanagment');
    })->name('socialmediamanagment');



    Route::get('service-digital-marketing',function (){
        return view('pages.services.digitalmarketing');
    })->name('digitalmarketing');


    Route::get('service-influencer',function (){
        return view('pages.services.influencer');
    })->name('influencer');


    Route::get('service-photo-shooting',function (){
        return view('pages.services.photoshooting');
    })->name('photoshooting');


    Route::get('service-drone',function (){
        return view('pages.services.drone');
    })->name('drone');

    Route::get('service-event-management',function (){
        return view('pages.services.eventmangement');
    })->name('eventmangement');

    Route::get('service-sponsorship',function (){
        return view('pages.services.sponsership');
    })->name('sponsership');

    Route::get('service-video-production',function (){
        return view('pages.services.videoproduction');
    })->name('videoproduction');

    //our team
    Route::get('our-team' , 'App\Http\Controllers\SendEmailController@index')->name('ourteam');
    Route::post('send-email/send' , 'App\Http\Controllers\SendEmailController@send');

    //our projects
    Route::get('our-projects',function (){
       return view('ourprojects.index');
    })->name('ourprojects');

    Route::get('web-projects',function (){
       return view('ourprojects.web');
    })->name('webproject');


});


