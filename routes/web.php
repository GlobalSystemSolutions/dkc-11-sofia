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

Route::get('/', 'Center\HomeController@index')->name('welcome');

Route::get('/specialized-cabinets', 'Center\Structure\SpecializedCabinetsController@index')->name('specialized-cabinets');
Route::get('/imaging', 'Center\Structure\ImagingController@index')->name('imaging');

Route::get('/clinical-laboratory', 'Center\Laboratory\LaboratoryController@index')->name('clinical-laboratory');
Route::get('/results', 'Center\Laboratory\LaboratoryController@showPatientsLogin')->name('results');
Route::get('/doctors', 'Center\Laboratory\LaboratoryController@showDoctorsLogin')->name('doctors');

Route::get('/physical-therapy-and-rehabilitation', 'Center\Structure\RehabilitationController@index')->name('physical-therapy-and-rehabilitation');
Route::get('/general-practitions-and-dentists', 'Center\Structure\PractitionController@index')->name('general-practitions-and-dentists');
// Route::get('/specialized-home-services', 'Center\Structure\HomeServicesController@index')->name('specialized-home-services');
Route::get('/price-list', 'Center\Structure\PriceListController@index')->name('price-list');

Route::get('/news', 'Center\PublicRelations\NewsController@index')->name('news');
Route::get('/news/{slug}', 'Center\PublicRelations\NewsController@show');

Route::get('/campaigns', 'Center\PublicRelations\CampaignController@index')->name('campaigns');
Route::get('/campaigns/{slug}', 'Center\PublicRelations\CampaignController@show');

Route::get('/careers', 'Center\PublicRelations\CareerController@index')->name('careers');
Route::get('/careers/{slug}', 'Center\PublicRelations\CareerController@show');

Route::get('/buyer-profile', 'Center\PublicRelations\BuyerProfileController@index')->name('buyer-profile');
Route::get('/buyer-profile/{slug}', 'Center\PublicRelations\BuyerProfileController@showCategory');
Route::get('/buyer-profile/publication/{slug}', 'Center\PublicRelations\BuyerProfileController@showPublication');

Route::get('/about-us', 'Center\AboutUsController@index')->name('about-us');
Route::get('/contacts', 'Center\ContactsController@index')->name('contacts');


// Laboratory Results
Route::post('/patient-results', 'Center\Laboratory\Results\PatientController@showPatientResults')->name('patient-results');
Route::post('/doctor-patients', 'Center\Laboratory\Results\DoctorController@showPatientsList')->name('doctor-patients');
Route::post('/doctor-patients/search', 'Center\Laboratory\Results\DoctorController@searchPatientsList')->name('doctor-patients-search');

//Auth::routes();

// Authentication Routes
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

// User activation routes
Route::group(['prefix' => 'activation', 'as' => 'activation.', 'middleware' => ['guest']], function () {
    Route::get('/resend', 'Auth\ActivationResendController@index')->name('resend');
    Route::post('/resend', 'Auth\ActivationResendController@store')->name('resend.store');
    Route::get('/{confirmation_token}', 'Auth\ActivationController@activate')->name('activate');
});

// User profile Routes
Route::group(['middleware' => ['auth', 'web']], function () {
    Route::get('/home', 'User\Profile\ProfileController@index')->name('home');
});


/**
 * Admin routes
 */
Route::group(['middleware' => ['auth']], function () {

    /**
     * Admin routes
     * Roles: 'super-admin', 'admin', 'moderator'
     */
    Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' =>  ['role:,super,admin,moderator']], function () {

        // Admin panel home
        Route::get('/', 'Admin\AdminController@index')->name('home');

        // News routes
        Route::get('/news', 'Admin\News\NewsController@index')->name('news.index');
        Route::get('/news/create/show', 'Admin\News\NewsController@showCreate')->name('news.create.show');
        Route::post('/news/create', 'Admin\News\NewsController@create')->name('news.create');
        Route::post('/news/edit/show', 'Admin\News\NewsController@showEdit')->name('news.edit.show');
        Route::post('/news/edit', 'Admin\News\NewsController@edit')->name('news.edit');
        Route::post('/news/activate', 'Admin\News\NewsController@activate')->name('news.activate');
        Route::post('/news/deactivate', 'Admin\News\NewsController@deactivate')->name('news.deactivate');
        Route::post('/news/delete', 'Admin\News\NewsController@delete')->name('news.delete');

        // Campaigns routes
        Route::get('/campaigns', 'Admin\Campaign\CampaignController@index')->name('campaigns.index');
        Route::get('/campaign/create/show', 'Admin\Campaign\CampaignController@showCreate')->name('campaign.create.show');
        Route::post('/campaign/create', 'Admin\Campaign\CampaignController@create')->name('campaign.create');
        Route::post('/campaign/edit/show', 'Admin\Campaign\CampaignController@showEdit')->name('campaign.edit.show');
        Route::post('/campaign/edit', 'Admin\Campaign\CampaignController@edit')->name('campaign.edit');
        Route::post('/campaign/activate', 'Admin\Campaign\CampaignController@activate')->name('campaign.activate');
        Route::post('/campaign/deactivate', 'Admin\Campaign\CampaignController@deactivate')->name('campaign.deactivate');
        Route::post('/campaign/delete', 'Admin\Campaign\CampaignController@delete')->name('campaign.delete');

        // Careers routes
        Route::get('/careers', 'Admin\Career\CareerController@index')->name('careers.index');
        Route::get('/career/create/show', 'Admin\Career\CareerController@showCreate')->name('career.create.show');
        Route::post('/career/create', 'Admin\Career\CareerController@create')->name('career.create');
        Route::post('/career/edit/show', 'Admin\Career\CareerController@showEdit')->name('career.edit.show');
        Route::post('/career/edit', 'Admin\Career\CareerController@edit')->name('career.edit');
        Route::post('/career/activate', 'Admin\Career\CareerController@activate')->name('career.activate');
        Route::post('/career/deactivate', 'Admin\Career\CareerController@deactivate')->name('career.deactivate');
        Route::post('/career/delete', 'Admin\Career\CareerController@delete')->name('career.delete');

        // Buyer profile routes
        Route::get('/buyer-profile', 'Admin\BuyerProfile\BuyerProfileController@index')->name('buyer.index');
        Route::get('/buyer-profile/{slug}', 'Admin\BuyerProfile\BuyerProfileController@show');
        Route::post('/buyer-profile/create/show', 'Admin\BuyerProfile\BuyerProfileController@showCreate')->name('buyer.create.show');
        Route::post('/buyer-profile/create', 'Admin\BuyerProfile\BuyerProfileController@create')->name('buyer.create');
        Route::post('/buyer-profile/edit/show', 'Admin\BuyerProfile\BuyerProfileController@showEdit')->name('buyer.edit.show');
        Route::post('/buyer-profile/edit', 'Admin\BuyerProfile\BuyerProfileController@edit')->name('buyer.edit');
        Route::post('/buyer-profile/activate', 'Admin\BuyerProfile\BuyerProfileController@activate')->name('buyer.activate');
        Route::post('/buyer-profile/deactivate', 'Admin\BuyerProfile\BuyerProfileController@deactivate')->name('buyer.deactivate');
        Route::post('/buyer-profile/delete', 'Admin\BuyerProfile\BuyerProfileController@delete')->name('buyer.delete');

        // Buyer type routes
        Route::post('/buyer-type/create', 'Admin\BuyerProfile\BuyerTypeController@create')->name('buyer.type.create');
        Route::post('/buyer-type/edit', 'Admin\BuyerProfile\BuyerTypeController@edit')->name('buyer.type.edit');
        Route::post('/buyer-type/activate', 'Admin\BuyerProfile\BuyerTypeController@activate')->name('buyer.type.activate');
        Route::post('/buyer-type/deactivate', 'Admin\BuyerProfile\BuyerTypeController@deactivate')->name('buyer.type.deactivate');
        Route::post('/buyer-type/delete', 'Admin\BuyerProfile\BuyerTypeController@delete')->name('buyer.type.delete');

    });

    /**
     * Admin routes
     * Roles: 'super-admin', 'admin'
     */
    Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' =>  ['role:,super, admin']], function () {
        // Center routes
        Route::get('/center', 'Admin\Center\CenterController@index')->name('center.index');
        Route::post('/center/edit/show', 'Admin\Center\CenterController@showEdit')->name('center.edit.show');
        Route::post('/center/edit', 'Admin\Center\CenterController@edit')->name('center.edit');

        // Doctors routes
        Route::get('/doctors', 'Admin\Doctor\DoctorController@index')->name('doctors');

        // Prices routes
        Route::get('/prices', 'Admin\PriceList\PriceListController@index')->name('prices');
    });


    /**
     * Admin routes
     * Roles: 'super-admin'
     */
    Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' =>  ['role:,super']], function () {

        // Center routes
        Route::get('/center/create', 'Admin\Center\CenterController@showCreate')->name('center.create');
        Route::post('/center/new', 'Admin\Center\CenterController@create')->name('center.new');
        Route::post('/center/activate', 'Admin\Center\CenterController@activate')->name('center.activate');
        Route::post('/center/deactivate', 'Admin\Center\CenterController@deactivate')->name('center.deactivate');
        Route::post('/center/delete', 'Admin\Center\CenterController@delete')->name('center.delete');

        Route::get('/laboratories', 'Admin\Laboratory\LaboratoryController@index')->name('laboratories');
        Route::get('/users', 'Admin\User\UserController@index')->name('users');
    });

    /**
     * File manager routes
     * Roles: 'super-admin', 'admin', 'moderator'
     */
    Route::group(['middleware' => ['role:,super,admin,moderator']], function () {
        Route::get('/laravel-filemanager', '\UniSharp\LaravelFilemanager\Controllers\LfmController@show');
        Route::post('/laravel-filemanager/upload', '\UniSharp\LaravelFilemanager\Controllers\UploadController@upload');
    });
});





