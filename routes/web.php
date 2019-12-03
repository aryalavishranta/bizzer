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
Route::get('/','FrontendController@view');
Route::post('/subscriptionstore','SubscriptionController@store');
Route::post('/storecontact','ContactController@store');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => 'auth'], function () {
Route::get('logout','DashboardController@logout')->name('logout');

Route::get('cpanel','DashboardController@home'); 
Route::post('/quickmail','DashboardController@quickmail');
Route::get('view-all-mails','DashboardController@view');
Route::get('/deletemail/{id}','DashboardController@del');


//ABOUT
Route::get('abouts-add','AboutController@addabout');
Route::post('/storeabout','AboutController@store');
Route::get('abouts-view','AboutController@view');
Route::post('/updateabout','AboutController@updateabout');
Route::get('/editabout','AboutController@editabout');


//CAROUSEL
Route::get('/carousel-add','CarouselController@addcarousel');
Route::get('/carousel-view','CarouselController@viewcarousel');
Route::post('/storecarousel','CarouselController@store');
Route::post('/statuscar/{id}','CarouselController@statusupdate');
Route::get('/deletecar/{id}','CarouselController@delete');

//Service
Route::get('/service-add','ServiceController@addservice');
Route::get('/service-view','ServiceController@view');
Route::post('/storeservices','ServiceController@store');
Route::post('/serviceupdate/{id}','ServiceController@updateservice');
Route::post('/servicestatus/{id}','ServiceController@statusupdate');
Route::get('/deleteservices/{id}','ServiceController@delete');



//Feature
Route::get('/feature-add','FeatureController@addfeature');
Route::get('/feature-view','FeatureController@view');
Route::post('/storefeature','FeatureController@store');
Route::post('/featureupdate/{id}','FeatureController@updatefeature');
Route::post('/featurestatus/{id}','FeatureController@statusupdate');
Route::get('/deletefeature/{id}','FeatureController@delete');


//Package
Route::get('/package-add','PackageController@add');
Route::get('/package-view','PackageController@view');
Route::post('/storepackage','PackageController@store');
Route::post('/packageupdate/{id}','PackageController@updatepackage');
Route::post('/packagestatus/{id}','PackageController@statusupdate');
Route::get('/deletepackage/{id}','PackageController@delete');


//Testimonial
Route::get('/testimonial-add','TestimonialController@add');
Route::get('/testimonial-view','TestimonialController@view');
Route::post('/storetestimonial','TestimonialController@store');
Route::post('/updatetestonomial/{id}','TestimonialController@updatetestimonial');
Route::post('/testimonialstatus/{id}','TestimonialController@statusupdate');
Route::get('/deletetestimonial/{id}','TestimonialController@delete');



//Contact
Route::get('/createcontact','ContactController@addcontact');
Route::get('/viewcontact','ContactController@contact');
Route::get('/replies','ContactController@reply');
Route::get('/replycontact/{id}','ContactController@replyform');

Route::post('/storereply/{id}','ContactController@storereply');
Route::get('/deleteinbox/{id}','ContactController@deleteinbox');
Route::get('/deletereply/{id}','ContactController@deletereply');


//WHy us
Route::get('/whyus-add','WhyusController@add');
Route::post('/storewhyus','WhyusController@store');
Route::get('/whyus-view','WhyusController@view');
Route::post('/whyusupdate/{id}','WhyusController@updatewhyus');
Route::post('/whyusstatus/{id}','WhyusController@statusupdate');
Route::get('/deletewhyus/{id}','WhyusController@delete');

//Summary
Route::get('summary-add','Summarycontroller@add');
Route::post('summarystore','Summarycontroller@store');
Route::get('summary-view','Summarycontroller@view');
Route::get('/editsummary/{id}','Summarycontroller@editsummary');
Route::post('/updatesummary/{id}','Summarycontroller@update');


//Portfolio
Route::get('/portfolio-add','PortfolioController@add');
Route::get('/portfolio-view','PortfolioController@view');
Route::post('/storeportfolio','PortfolioController@store');
Route::post('/statusportfolio','PortfolioController@statusupdate');
Route::get('/deleteportfolio','PortfolioController@delete');

//Subscription

Route::get('/subscription-view','SubscriptionController@view');
Route::get('/deletesubscription/{id}','SubscriptionController@delete');

//Seo
Route::get('/seo-add','SEOController@add');
Route::get('/seo-view','SEOController@view');
Route::post('/seostore','SEOController@store');
Route::get('/editseo/{id}','SEOController@edit');
Route::post('/updateseo/{id}','SEOController@updateseo');
Route::get('/deleteseo/{id}','SEOController@delete');
});