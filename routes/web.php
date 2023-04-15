<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BlogController;
use App\Http\Controllers\FAQsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\OurTeamController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\FeaturesController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\Admin\AdminBlogController;
use App\Http\Controllers\Admin\AdminTeamController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\AdminSettingController;
use App\Http\Controllers\Admin\AdminFeedbackController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminNewsletterController;
use App\Http\Controllers\Admin\AdminImageUploadController;
use App\Http\Controllers\Admin\AdminVideoUploadController;
use App\Http\Controllers\Admin\AdminNewsletterSubscriberController;

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

Route::get('/login', function () {
    return view('welcome');
});

require __DIR__.'/auth.php';

Route::get('/', [HomeController::class, 'index']);
Route::get('demo-video', [HomeController::class, 'viewDemo'])->name('demo-video');

Route::get('features', [FeaturesController::class, 'features'])->name('features');
Route::get('pricing', [PricingController::class, 'pricing']);

Route::get('blog', [BlogController::class, 'blog'])->name('blog');
Route::get('blog-single/{id}', [BlogController::class, 'blogSingle']);

Route::get('contact', [ContactController::class, 'contact'])->name('contact');
Route::post('contact', [ContactController::class, 'mailContactForm']);

Route::get('feedback', [FeedbackController::class, 'feedback'])->name('feedback');
Route::post('feedback', [FeedbackController::class, 'mailFeedbackForm']);

Route::get('frequently-asked-questions', [FAQsController::class, 'frequentlyAskedQuestions'])->name('frequently-asked-questions');
Route::get('our-team', [OurTeamController::class, 'ourTeam'])->name('our-team');

Route::group(
    [
        'prefix' => 'newsletter-subscriber',
    ], function () {
        // Route::get('/subscriber', [AdminNewsletterSubscriberController::class, 'addNewsLetterSubscriber']);
        // Route::post('/subscriber', [AdminNewsletterSubscriberController::class, 'storeNewsLetterSubscriber']);
        Route::get('/view-subscribers', [AdminNewsletterSubscriberController::class, 'viewNewsLetterSubscriber']); 
        // Route::get('/', function () {
        //     return view();
        // });    
    }
);

Route::group(
    [
        'prefix' => 'dashboard',
        'middleware' => ['auth']
    ], function (){

    Route::get('/', [AdminDashboardController::class, 'viewDashboard'], function () {
        return view('dashboard');
    })->middleware(['auth'])->name('dashboard');

    Route::group(
        [
            'prefix' => 'feedback',
            'middleware' => ['auth']
        ], function () {
            Route::get('/active-view', [AdminFeedbackController::class, 'viewActiveFeedback']);
            Route::get('/inactive-view', [AdminFeedbackController::class, 'viewInActiveFeedback']);
            Route::get('/{id}', [AdminFeedbackController::class, 'toggleStatus']); 
        }
    );

    Route::group(
        [
            'prefix' => 'blog',
            'middleware' => ['auth']
        ], function () {
            Route::get('/view', [AdminBlogController::class, 'viewBlog']);
            Route::get('/add-edit', [AdminBlogController::class, 'addBlog']);
            Route::post('/add-edit', [AdminBlogController::class, 'storeBlog']);
            Route::get('/read-more/{id}', [AdminBlogController::class, 'readMore']);
            Route::get('/{id}', [AdminBlogController::class, 'deleteBlog']);
            Route::get('/edit/{id}', [AdminBlogController::class, 'editBlog']);
            Route::post('/update', [AdminBlogController::class, 'updateBlog']);
        }
    );

    Route::group(
        [
            'prefix' => 'gallery/video',
            'middleware' => ['auth']
        ], function () {
            Route::get('/view', [AdminVideoUploadController::class, 'viewVideo']);
            Route::get('/upload-video', [AdminVideoUploadController::class, 'uploadVideo']);
            Route::post('/upload-video', [AdminVideoUploadController::class, 'storeVideo']);
            Route::get('/{id}', [AdminVideoUploadController::class, 'deleteVideo']);
        }
    );

    Route::group(
        [
            'prefix' => 'gallery/image',
            'middleware' => ['auth']
        ], function () {
            Route::get('/view', [AdminImageUploadController::class, 'viewImage']);
            Route::get('/upload-image', [AdminImageUploadController::class, 'uploadImage']);
            Route::post('/upload-image', [AdminImageUploadController::class, 'storeImage']);
            Route::get('/{id}', [AdminImageUploadController::class, 'deleteImage']);
        }
    );

    Route::group(
        [
            'prefix' => 'newsletter',
            'middleware' => ['auth']
        ], function () {
            Route::get('/view', [AdminNewsletterController::class, 'viewNewsLetter']);
            Route::get('/add-newsletter', [AdminNewsletterController::class, 'addNewsLetter']);
            Route::post('/add-newsletter', [AdminNewsletterController::class, 'storeNewsLetter']);
            Route::get('/{id}', [AdminNewsletterController::class, 'deleteNewsLetter']);
            Route::get('/edit/{id}', [AdminNewsletterController::class, 'editNewsLetter']);
            Route::post('/update', [AdminNewsletterController::class, 'updateNewsLetter']);
            Route::post('/send-newsletter', [AdminNewsletterController::class, 'sendNewsLetter']);            
        }
    );

    Route::group(
        [
            'prefix' => 'team',
            'middleware' => ['auth']
        ], function () {
            Route::get('/view', [AdminTeamController::class, 'viewTeam']);
            Route::get('/add-edit', [AdminTeamController::class, 'addTeam']);
            Route::post('/add-edit', [AdminTeamController::class, 'storeTeam']);
            Route::get('/{id}', [AdminTeamController::class, 'deleteTeam']);
            Route::get('/edit/{id}', [AdminTeamController::class, 'editTeam']);
            Route::post('/update', [AdminTeamController::class, 'updateTeam']); 
        }
    );

    Route::group(
        [
            'prefix' => 'setting',
            'middleware' => ['auth']
        ], function () {
            Route::get('/view', [AdminSettingController::class, 'viewSetting']);
            Route::get('/add-edit', [AdminSettingController::class, 'addSetting']);
            Route::post('/add-edit', [AdminSettingController::class, 'storeSetting']);
            // Route::get('/{id}', [AdminTeamController::class, 'deleteSetting']);
            Route::get('/edit/{id}', [AdminSettingController::class, 'editSetting']);
            Route::post('/update', [AdminSettingController::class, 'updateSetting']); 
        }
    );

    Route::group(
        [
            'prefix' => 'user',
            'middleware' => ['auth']
        ], function () {
            Route::get('/view', [AdminUserController::class, 'viewUser']);
            Route::get('/add-user', [AdminUserController::class, 'addUser']);
            Route::post('/add-user', [AdminUserController::class, 'storeUser']);
            Route::get('/{id}', [AdminUserController::class, 'deleteUser']);
            // Route::get('/edit/{id}', [AdminSettingController::class, 'editSetting']);
            // Route::post('/update', [AdminSettingController::class, 'updateSetting']); 
        }
    );
});