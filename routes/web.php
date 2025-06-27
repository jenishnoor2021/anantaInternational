<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminFaqController;
use App\Http\Controllers\AdminTarotController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AdminCompanyController;
use App\Http\Controllers\AdminContactController;
use App\Http\Controllers\AdminGalleryController;
use App\Http\Controllers\AdminInquiryController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminProductsController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AdminTestominalController;
use App\Http\Controllers\AdminCertificatesController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordController;

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


Route::get('/', [AdminController::class, 'siteHomePage'])->name('site.home');

Route::get('/about', [AdminController::class, 'about'])->name('site.about');
Route::get('/services', [AdminController::class, 'services'])->name('site.services');
Route::get('/products', [AdminController::class, 'products'])->name('site.products');
Route::get('/faq', [AdminController::class, 'faq'])->name('site.faq');
Route::get('/contact', [AdminController::class, 'contact'])->name('site.contact');

Route::post('/contactstore', [AdminController::class, 'storeContact'])->name('storeContact');

Route::get('/ajax/testimonials', [AdminController::class, 'ajaxTestimonials'])->name('ajax.testimonials');

//  for admin registration below comment uncomment karvi and above auth.login ne comment karvi
// Route::get('/', function () {
//     return view('welcome');
// });
// Auth::routes();

// Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/admin/login', function () {
    return view('auth.login');
})->name('admin.login');
Route::post('/login', [AdminController::class, 'login'])->name('login');
Route::get('/logout', [AdminController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth', 'usersession']], function () {

    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin');

    Route::get('/profile/{id}', [AdminController::class, 'profiledit'])->name('profile.edit');
    Route::post('/profile/update', [AdminController::class, 'profileUpdate'])->name('profile.update');

    Route::get("admin/company", [AdminCompanyController::class, 'index'])->name('admin.company.index');
    Route::get('admin/company/create', [AdminCompanyController::class, 'create'])->name('admin.company.create');
    Route::post('admin/company/store', [AdminCompanyController::class, 'store'])->name('admin.company.store');
    Route::get('admin/company/edit/{id}', [AdminCompanyController::class, 'edit'])->name('admin.company.edit');
    Route::patch('admin/company/update/{id}', [AdminCompanyController::class, 'update'])->name('admin.company.update');
    Route::get('admin/company/destroy/{id}', [AdminCompanyController::class, 'destroy'])->name('admin.company.destroy');
    Route::post("admin/company/active", [AdminCompanyController::class, 'statusUpdate'])->name('admin.company.active');

    Route::get("admin/testomonial", [AdminTestominalController::class, 'index'])->name('admin.testomonial.index');
    Route::get('admin/testomonial/create', [AdminTestominalController::class, 'create'])->name('admin.testomonial.create');
    Route::post('admin/testomonial/store', [AdminTestominalController::class, 'store'])->name('admin.testomonial.store');
    Route::get('admin/testomonial/edit/{id}', [AdminTestominalController::class, 'edit'])->name('admin.testomonial.edit');
    Route::patch('admin/testomonial/update/{id}', [AdminTestominalController::class, 'update'])->name('admin.testomonial.update');
    Route::get('admin/testomonial/destroy/{id}', [AdminTestominalController::class, 'destroy'])->name('admin.testomonial.destroy');
    Route::delete('/mytestomonialDeleteAll', [AdminTestominalController::class, 'deleteTestomonialAll'])->name('deletetestomonialAll');
    Route::get("admin/testomonial/searchtestompnial", [AdminTestominalController::class, 'searchTestomonial'])->name('admin.testomonial.search');
    Route::post("admin/testomonial/active", [AdminTestominalController::class, 'statusUpdate'])->name('admin.testomonial.active');

    Route::get("admin/certificates", [AdminCertificatesController::class, 'index'])->name('admin.certificates.index');
    Route::get('admin/certificates/create', [AdminCertificatesController::class, 'create'])->name('admin.certificates.create');
    Route::post('admin/certificates/store', [AdminCertificatesController::class, 'store'])->name('admin.certificates.store');
    Route::get('admin/certificates/edit/{id}', [AdminCertificatesController::class, 'edit'])->name('admin.certificates.edit');
    Route::patch('admin/certificates/update/{id}', [AdminCertificatesController::class, 'update'])->name('admin.certificates.update');
    Route::get('admin/certificates/destroy/{id}', [AdminCertificatesController::class, 'destroy'])->name('admin.certificates.destroy');
    Route::post("admin/certificates/active", [AdminCertificatesController::class, 'statusUpdate'])->name('admin.certificates.active');

    Route::get("admin/gallery", [AdminGalleryController::class, 'index'])->name('admin.gallery.index');
    Route::get('admin/gallery/create', [AdminGalleryController::class, 'create'])->name('admin.gallery.create');
    Route::post('admin/gallery/store', [AdminGalleryController::class, 'store'])->name('admin.gallery.store');
    Route::get('admin/gallery/edit/{id}', [AdminGalleryController::class, 'edit'])->name('admin.gallery.edit');
    Route::patch('admin/gallery/update/{id}', [AdminGalleryController::class, 'update'])->name('admin.gallery.update');
    Route::get('admin/gallery/destroy/{id}', [AdminGalleryController::class, 'destroy'])->name('admin.gallery.destroy');
    Route::post("admin/gallery/active", [AdminGalleryController::class, 'statusUpdate'])->name('admin.gallery.active');

    Route::get("admin/faq", [AdminFaqController::class, 'index'])->name('admin.faq.index');
    Route::get('admin/faq/create', [AdminFaqController::class, 'create'])->name('admin.faq.create');
    Route::post('admin/faq/store', [AdminFaqController::class, 'store'])->name('admin.faq.store');
    Route::get('admin/faq/edit/{id}', [AdminFaqController::class, 'edit'])->name('admin.faq.edit');
    Route::patch('admin/faq/update/{id}', [AdminFaqController::class, 'update'])->name('admin.faq.update');
    Route::get('admin/faq/destroy/{id}', [AdminFaqController::class, 'destroy'])->name('admin.faq.destroy');
    Route::post("admin/faq/active", [AdminFaqController::class, 'statusUpdate'])->name('admin.faq.active');

    Route::get("admin/contact", [AdminContactController::class, 'index'])->name('admin.contact.index');
    Route::get('admin/contact/create', [AdminContactController::class, 'create'])->name('admin.contact.create');
    Route::post('admin/contact/store', [AdminContactController::class, 'store'])->name('admin.contact.store');
    Route::get('admin/contact/edit/{id}', [AdminContactController::class, 'edit'])->name('admin.contact.edit');
    Route::patch('admin/contact/update/{id}', [AdminContactController::class, 'update'])->name('admin.contact.update');
    Route::get('admin/contact/destroy/{id}', [AdminContactController::class, 'destroy'])->name('admin.contact.destroy');
    Route::post("admin/contact/active", [AdminContactController::class, 'statusUpdate'])->name('admin.contact.active');

    Route::get("admin/category", [AdminCategoryController::class, 'index'])->name('admin.category.index');
    Route::get('admin/category/create', [AdminCategoryController::class, 'create'])->name('admin.category.create');
    Route::post('admin/category/store', [AdminCategoryController::class, 'store'])->name('admin.category.store');
    Route::get('admin/category/edit/{id}', [AdminCategoryController::class, 'edit'])->name('admin.category.edit');
    Route::patch('admin/category/update/{id}', [AdminCategoryController::class, 'update'])->name('admin.category.update');
    Route::get('admin/category/destroy/{id}', [AdminCategoryController::class, 'destroy'])->name('admin.category.destroy');
    Route::post("admin/category/active", [AdminCategoryController::class, 'statusUpdate'])->name('admin.category.active');

    Route::get("admin/product", [AdminProductsController::class, 'index'])->name('admin.product.index');
    Route::get('admin/product/create', [AdminProductsController::class, 'create'])->name('admin.product.create');
    Route::post('admin/product/store', [AdminProductsController::class, 'store'])->name('admin.product.store');
    Route::get('admin/product/edit/{id}', [AdminProductsController::class, 'edit'])->name('admin.product.edit');
    Route::patch('admin/product/update/{id}', [AdminProductsController::class, 'update'])->name('admin.product.update');
    Route::get('admin/product/destroy/{id}', [AdminProductsController::class, 'destroy'])->name('admin.product.destroy');
    Route::post("admin/product/active", [AdminProductsController::class, 'statusUpdate'])->name('admin.product.active');
});

//Clear Cache facade value:
Route::get('/admin/clear-cache', function () {
    Artisan::call('cache:clear');
    return '<h1>Cache facade value cleared</h1>';
});

//Reoptimized class loader:
Route::get('/admin/optimize', function () {
    Artisan::call('optimize');
    return '<h1>Reoptimized class loader</h1>';
});

//Route cache:
Route::get('/admin/route-cache', function () {
    Artisan::call('route:cache');
    return '<h1>Routes cached</h1>';
});

//Clear Route cache:
Route::get('/admin/route-clear', function () {
    Artisan::call('route:clear');
    return '<h1>Route cache cleared</h1>';
});

//Clear View cache:
Route::get('/admin/view-clear', function () {
    Artisan::call('view:clear');
    return '<h1>View cache cleared</h1>';
});

//Clear Config cache:
Route::get('/admin/config-cache', function () {
    Artisan::call('config:cache');
    return '<h1>Clear Config cleared</h1>';
});
