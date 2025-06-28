<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\BussinessController;
use App\Http\Controllers\Admin\CmsController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\FeaturedController;
use App\Http\Controllers\Admin\FaqCategoriesController;
use App\Http\Controllers\Admin\FinancebanksController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\AchieversController;
use App\Http\Controllers\Admin\CountriesController;
use App\Http\Controllers\Admin\FaqsController;
use App\Http\Controllers\Admin\BlogsController;
use App\Http\Controllers\Admin\CoachingController;
use App\Http\Controllers\Admin\VideoGalleryController;
use App\Http\Controllers\Admin\SeoController;
use App\Http\Controllers\IndexUiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('ui.index');
})->name('/');
Route::get('achievers', function () {
    return view('ui.achivers');
})->name('achievers-page');
Route::get('contact', function () {
    return view('ui.contact');
})->name('contact-page');

Route::get('testimonial', function () {
    return view('ui.testimonial-page');
})->name('testimonial-page');

Route::get('introduction', function () {
    return view('ui.introduction');
})->name('introduction-page');

Route::get('our-team', function () {
    return view('ui.our-team');
})->name('our-team-page');

Route::get('why-us', function () {
    return view('ui.why-us');
})->name('why-us-page');

Route::get('scholarship', function () {
    return view('ui.scholarship');
})->name('scholarship-page');

Route::get('result', function () {
    return view('ui.result');
})->name('result-page');

Route::get('faq', function () {
    return view('ui.faq');
})->name('faq');

Route::get('blog', function () {
    return view('ui.blog');
})->name('blog-page');

Route::get('country', function () {
    return view('ui.country');
})->name('country-page');


// contact form
Route::post('ajax-contact', [IndexUiController::class, 'ajax_contact'])->name('ajax.contact');

Route::get('blog-detail/{id}', [IndexUiController::class,'blog_detail'])->name('blog-details-page');
Route::get('country-detail/{id}', [IndexUiController::class,'country_detail'])->name('country-details-page');
Route::get('coaching-detail/{id}', [IndexUiController::class,'coaching_detail'])->name('coaching-details-page');

Route::post('insert/contact',[IndexUiController::class,'insertContact'])->name('insert.contact');

// test-book
Route::post('insert/test', [IndexUiController::class, 'onloadForm'])->name('insert.test');

Route::view('test','ui.country-detail');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';


Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth:admin', 'verified'])->name('admin.dashboard');

require __DIR__ . '/admin.php';

Route::group(['middleware' => ['auth:admin'], 'prefix' => 'admin', 'as' => 'admin.'], function () {

    // bussinesetting
    Route::get('bussinesssetting', [BussinessController::class, 'index'])->name('bussinesssetting');
    Route::post('update-bussiness-setting', [BussinessController::class, 'bussinessUpdate'])->name('update-bussiness-setting');
	    Route::get('data/test', [BussinessController::class, 'show'])->name('data/test');
Route::get('delete/test/{id}', [BussinessController::class, 'delete'])->name('delete.test');


Route::get('data/contact', [BussinessController::class, 'contactshow'])->name('data/contact');
// contact ajax
Route::post('contact/ajax', [BussinessController::class, 'contactAjax'])->name('contact.ajax');
Route::get('delete/contact/{id}', [BussinessController::class, 'contactdelete'])->name('delete.contact');

    // status on off
    Route::post('ajax-status', [BussinessController::class, 'ajax_status'])->name('ajax.status');

    // cmssetting
    Route::get('cms-setting', [CmsController::class, 'index'])->name('cms-setting');
    Route::post('update-cms-setting', [CmsController::class, 'cmsUpdate'])->name('update-cms-setting');

    //Slider
    Route::get('slider', [SliderController::class, 'create'])->name('slider');
    Route::post('insert/slider', [SliderController::class, 'store'])->name('insert/slider');
    Route::get('data/slider', [SliderController::class, 'show'])->name('data/slider');
    Route::get('edit/slider/{id}', [SliderController::class, 'edit'])->name('edit.slider');
    Route::post('update/slider/{id}', [SliderController::class, 'update'])->name('update.slider');
    Route::get('delete/slider/{id}', [SliderController::class, 'delete'])->name('delete.slider');

    //Featured
    Route::get('featured', [FeaturedController::class, 'create'])->name('featured');
    Route::post('insert/featured', [FeaturedController::class, 'store'])->name('insert/featured');
    Route::get('data/featured', [FeaturedController::class, 'show'])->name('data/featured');
    Route::get('edit/featured/{id}', [FeaturedController::class, 'edit'])->name('edit.featured');
    Route::post('update/featured/{id}', [FeaturedController::class, 'update'])->name('update.featured');
    Route::get('delete/featured/{id}', [FeaturedController::class, 'delete'])->name('delete.featured');

    //Faq cat
    Route::get('faq-category', [FaqCategoriesController::class, 'create'])->name('faq-category');
    Route::post('insert/faq-category', [FaqCategoriesController::class, 'store'])->name('insert/faq-category');
    Route::get('data/faq-category', [FaqCategoriesController::class, 'show'])->name('data/faq-category');
    Route::get('edit/faq-category/{id}', [FaqCategoriesController::class, 'edit'])->name('edit.faq-category');
    Route::post('update/faq-category/{id}', [FaqCategoriesController::class, 'update'])->name('update.faq-category');
    Route::get('delete/faq-category/{id}', [FaqCategoriesController::class, 'delete'])->name('delete.faq-category');

    //Faqs
    Route::get('faqs', [FaqsController::class, 'create'])->name('faqs');
    Route::post('insert/faqs', [FaqsController::class, 'store'])->name('insert/faqs');
    Route::get('data/faqs', [FaqsController::class, 'show'])->name('data/faqs');
    Route::get('edit/faqs/{id}', [FaqsController::class, 'edit'])->name('edit.faqs');
    Route::post('update/faqs/{id}', [FaqsController::class, 'update'])->name('update.faqs');
    Route::get('delete/faqs/{id}', [FaqsController::class, 'delete'])->name('delete.faqs');

    //finance_banks
    Route::get('finance_banks', [FinancebanksController::class, 'create'])->name('finance_banks');
    Route::post('insert/finance_banks', [FinancebanksController::class, 'store'])->name('insert/finance_banks');
    Route::get('data/finance_banks', [FinancebanksController::class, 'show'])->name('data/finance_banks');
    Route::get('edit/finance_banks/{id}', [FinancebanksController::class, 'edit'])->name('edit.finance_banks');
    Route::post('update/finance_banks/{id}', [FinancebanksController::class, 'update'])->name('update.finance_banks');
    Route::get('delete/finance_banks/{id}', [FinancebanksController::class, 'delete'])->name('delete.finance_banks');

    // Testimonial
    Route::get('testimonial', [TestimonialController::class, 'create'])->name('testimonial');
    Route::post('insert/testimonial', [TestimonialController::class, 'store'])->name('insert.testimonial');
    Route::get('data/testimonial', [TestimonialController::class, 'show'])->name('data.testimonial');
    Route::get('edit/testimonial/{id}', [TestimonialController::class, 'edit'])->name('edit.testimonial');
    Route::post('update/testimonial/{id}', [TestimonialController::class, 'update'])->name('update.testimonial');
    Route::get('delete/testimonial/{id}', [TestimonialController::class, 'delete'])->name('delete.testimonial');

    // Blog
    Route::get('blog', [BlogsController::class, 'create'])->name('blog');
    Route::post('insert/blog', [BlogsController::class, 'store'])->name('insert.blog');
    Route::get('data/blog', [BlogsController::class, 'show'])->name('data.blog');
    Route::get('edit/blog/{id}', [BlogsController::class, 'edit'])->name('edit.blog');
    Route::post('update/blog/{id}', [BlogsController::class, 'update'])->name('update.blog');
    Route::get('delete/blog/{id}', [BlogsController::class, 'delete'])->name('delete.blog');

    //news
    Route::get('news-update', [NewsController::class, 'create'])->name('news-update');
    Route::post('insert/news-update', [NewsController::class, 'store'])->name('insert/news-update');
    Route::get('data/news-update', [NewsController::class, 'show'])->name('data/news-update');
    Route::get('edit/news-update/{id}', [NewsController::class, 'edit'])->name('edit.news-update');
    Route::post('update/news-update/{id}', [NewsController::class, 'update'])->name('update.news-update');
    Route::get('delete/news-update/{id}', [NewsController::class, 'delete'])->name('delete.news-update');
    //video
    Route::get('video', [VideoGalleryController::class, 'create'])->name('video');
    Route::post('insert/video', [VideoGalleryController::class, 'store'])->name('insert/video');
    Route::get('data/video', [VideoGalleryController::class, 'show'])->name('data/video');
    Route::get('edit/video/{id}', [VideoGalleryController::class, 'edit'])->name('edit.video');
    Route::post('update/video/{id}', [VideoGalleryController::class, 'update'])->name('update.video');
    Route::get('delete/video/{id}', [VideoGalleryController::class, 'delete'])->name('delete.video');

    //achievers
    Route::get('achievers', [AchieversController::class, 'create'])->name('achievers');
    Route::post('insert/achievers', [AchieversController::class, 'store'])->name('insert.achievers');
    Route::get('data/achievers', [AchieversController::class, 'show'])->name('data.achievers');
    Route::get('edit/achievers/{id}', [AchieversController::class, 'edit'])->name('edit.achievers');
    Route::post('update/achievers/{id}', [AchieversController::class, 'update'])->name('update.achievers');
    Route::get('delete/achievers/{id}', [AchieversController::class, 'delete'])->name('delete.achievers');

    //countries
    Route::get('countries', [CountriesController::class, 'create'])->name('countries');
    Route::post('insert/countries', [CountriesController::class, 'store'])->name('insert.countries');
    Route::get('data/countries', [CountriesController::class, 'show'])->name('data.countries');
    Route::get('edit/countries/{id}', [CountriesController::class, 'edit'])->name('edit.countries');
    Route::post('update/countries/{id}', [CountriesController::class, 'update'])->name('update.countries');
    Route::get('delete/countries/{id}', [CountriesController::class, 'delete'])->name('delete.countries');
	
	     //Seo
     Route::get('seo', [SeoController::class, 'create'])->name('seo');
     Route::post('insert/seo', [SeoController::class, 'store'])->name('insert/seo');
     Route::get('data/seo', [SeoController::class, 'show'])->name('data/seo');
     Route::get('edit/seo/{id}', [SeoController::class, 'edit'])->name('edit.seo');
     Route::post('update/seo/{id}', [SeoController::class, 'update'])->name('update.seo');

    //coachings
    Route::get('coachings', [CoachingController::class, 'create'])->name('coachings');
    Route::post('insert/coachings', [CoachingController::class, 'store'])->name('insert.coachings');
    Route::get('data/coachings', [CoachingController::class, 'show'])->name('data.coachings');
    Route::get('edit/coachings/{id}', [CoachingController::class, 'edit'])->name('edit.coachings');
    Route::post('update/coachings/{id}', [CoachingController::class, 'update'])->name('update.coachings');
    Route::get('delete/coachings/{id}', [CoachingController::class, 'delete'])->name('delete.coachings');
	
	    Route::get('profile-setting',[BussinessController::class, 'adminSettingAll'])->name('demo.setting');
Route::post('update-admin-setting',[BussinessController::class, 'settingUpdate'])->name('update-admin-setting');
});
