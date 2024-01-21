<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

// Admin Imports Starts Here...
use App\Http\Controllers\Admin\Auth\AuthController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminPagesController;
use App\Http\Controllers\Admin\AdminSaveDataController;
use App\Http\Controllers\Admin\AdminSettingController;
use App\Http\Controllers\Admin\AdminManageTourController;

// Admin Imports Ends Here...





Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about-us', [HomeController::class, 'aboutUs'])->name('about-us');
Route::get('/our-package', [HomeController::class, 'ourPackage'])->name('our-package');
Route::get('/contact-us', [HomeController::class, 'contactUs'])->name('contact-us');
Route::get('/pay-now', [HomeController::class, 'payNow'])->name('pay-now');
Route::get('/terms-and-condition', [HomeController::class, 'termsAndCondition'])->name('terms-and-condition');
Route::get('/privacy-policy', [HomeController::class, 'privacyPolicy'])->name('privacy-policy');
Route::get('/jeep-safari', [HomeController::class, 'jeepSafari'])->name('jeep-safari');



// Admin Routes Starts Here...
Route::get('/admin', [AuthController::class, 'adminLogin'])->name('admin');
Route::post('/admin/auth', [AuthController::class, 'adminAuthenticate'])->name('admin.auth');

Route::prefix('admin')->middleware(['admin_auth'])->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'dashboard'])->name('admin.dashboard');
    
    
    Route::get('/blogs', [AdminPagesController::class, 'blogs'])->name('admin.blogs');

    // About Us
    Route::get('/about-us', [AdminPagesController::class, 'aboutUs'])->name('admin.about-us');
    Route::post('/save-about', [AdminSaveDataController::class, 'saveAboutUs'])->name('admin.save-about');
    Route::delete('/remove-content/{id}', [AdminSaveDataController::class, 'removeContent'])->name('content.remove');

    // Contact Us
    Route::get('/contact-us', [AdminPagesController::class, 'contactUs'])->name('admin.contact-us');
    Route::post('/save-contact', [AdminSaveDataController::class, 'saveContactUs'])->name('admin.save-contact');

    // Pay Now
    Route::get('/pay-now', [AdminPagesController::class, 'payNow'])->name('admin.pay-now');
    Route::post('/save-pay-now', [AdminSaveDataController::class, 'savePayNow'])->name('admin.save-pay-now');

    // Terms And Condition
    Route::get('/terms-and-condition', [AdminPagesController::class, 'termsAndCondition'])->name('admin.terms-and-condition');
    Route::post('/save-terms-and-condition', [AdminSaveDataController::class, 'saveTermsAndConditions'])->name('admin.save-terms-and-condition');
    Route::post('/terms/title/delete', [AdminSaveDataController::class, 'deleteTermsAndConditionTitle'])->name('admin.terms.title.delete');
    Route::post('/terms/desc/delete', [AdminSaveDataController::class, 'deleteTermsAndConditionDesc'])->name('admin.terms.desc.delete');

    // Privacy Policy
    Route::get('/privacy-policy', [AdminPagesController::class, 'privacyPolicy'])->name('admin.privacy-policy');
    Route::post('/save-privacy-policy', [AdminSaveDataController::class, 'savePrivacyPolicy'])->name('admin.save-privacy-policy');
    Route::post('/privacy/title/delete', [AdminSaveDataController::class, 'deletePrivacyPolicyTitle'])->name('admin.privacy.title.delete');
    Route::post('/privacy/desc/delete', [AdminSaveDataController::class, 'deletePrivacyPolicyDesc'])->name('admin.privacy.desc.delete');
    

    // Jeep Safari
    Route::get('/jeep-safari', [AdminPagesController::class, 'jeepSafari'])->name('admin.jeep-safari');
    Route::post('/save-jeep-safari', [AdminSaveDataController::class, 'saveJeepSafari'])->name('admin.save-jeep-safari');
    Route::post('/jeep/title/delete', [AdminSaveDataController::class, 'deleteJeepSafariTitle'])->name('admin.jeep.title.delete');
    Route::post('/jeep/desc/delete', [AdminSaveDataController::class, 'deleteJeepSafariDesc'])->name('admin.jeep.desc.delete');



    // Manage Setting
    Route::get('/settings/general', [AdminSettingController::class, 'general'])->name('admin.settings.general');
    Route::post('/settings/save-general', [AdminSettingController::class, 'saveGeneralSettings'])->name('admin.settings.save-general');



    // Manage Tours
    Route::get('/tours/create', [AdminManageTourController::class, 'create'])->name('admin.tours.create');

});
// Admin Routes Ends Here...
