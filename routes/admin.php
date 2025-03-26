<?php 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\GoogleCalendarController;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\ConsultantController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\AboutUsController;
use App\Http\Controllers\Admin\CoreValueController;
use App\Http\Controllers\Admin\VisionMissionController;
use App\Http\Controllers\Admin\SociallinkController; 
use App\Http\Controllers\Admin\TestimonialsController;
use App\Http\Controllers\Admin\FAQController;
use App\Http\Controllers\Admin\ContactFormController;
use App\Http\Controllers\Admin\TransactionController; 
use App\Http\Controllers\Admin\BookingController;
use App\Http\Controllers\Admin\ApplicationController;
use App\Http\Controllers\Admin\CalendarController;



Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminLoginController::class, 'showLogin'])->name('admin.login');
    Route::post('/manage/login', [AdminLoginController::class, 'login'])->name('admin.login.submit');
    Route::post('/manage/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');
     
    Route::middleware('auth.admin')->group(function () {
        Route::post('/settings/update-password', [AdminLoginController::class, 'updatePassword'])->name('admin.password.update');
        Route::get('/settings/show-password', [AdminLoginController::class, 'showChangePasswordForm'])->name('admin.show.password');
        Route::get('/', [AdminController::class, 'index'])->name('admin.index');
        // Menu
       
        Route::get('/menu/create', [MenuController::class, 'creatMenu'])->name('admin.menu.create');
        Route::get('/manage/menu/index', [MenuController::class, 'indexMenu'])->name('admin.menu.index');
        Route::post('/menu', [MenuController::class, 'storeMenu'])->name('admin.menu.store');
        Route::get('/menu/{id}/edit', [MenuController::class, 'editMenu'])->name('admin.menu.edit');
        Route::put('/menu/{id}', [MenuController::class, 'updateMenu'])->name('admin.menu.update');
        Route::get('/menu/{id}', [MenuController::class, 'destroyMenu'])->name('admin.menu.destroy');
        //Slider 
        Route::get('/manage/sliderIndex', [SliderController::class, 'index'])->name('admin.slider.index');
        Route::get('/manage/sliderCreate', [SliderController::class, 'create'])->name('admin.slider.create');
        Route::post('/slider', [SliderController::class, 'store'])->name('slider.store');
        Route::get('/slider/{id}/edit', [SliderController::class, 'edit'])->name('admin.slider.edit');
        Route::put('/slider/{id}', [SliderController::class, 'update'])->name('admin.slider.update');
        Route::get('/slider/{id}', [SliderController::class, 'destroy'])->name('admin.slider.destroy');
        //Why choose us 
        Route::get('/settings/content', [SettingsController::class, 'WhyChooseUs'])->name('admin.settings.content');
        Route::post('/settings/store/why-choose-us', [SettingsController::class, 'storeWhyChooseUs'])->name('admin.settings.store_why_choose_us');
        Route::put('/settings/update/why-choose-us/{id}', [SettingsController::class, 'updateWhyChooseUs'])->name('admin.settings.update_why_choose_us');
         
        //User
        Route::name('admin.')->group(function () {
            Route::resource('users', UserController::class);
        });
        //Application
        Route::name('admin.')->group(function () {
            Route::resource('application', ApplicationController::class);
        });
       
        //About us
        Route::get('/settings/about-us', [SettingsController::class, 'getAboutUs'])->name('admin.settings.aboutUs');
        Route::post('/settings/store/about-us', [SettingsController::class, 'storeAboutUs'])->name('admin.settings.storeAboutus');
        Route::put('/settings/update/about-us/{id}', [SettingsController::class, 'updateAboutUs'])->name('admin.settings.updateAboutus');
        // Governance-board
        Route::get('/about-us', [AboutUsController::class, 'index'])->name('admin.about-us');
        Route::get('/governance-board', [AboutUsController::class, 'governanceBoard'])->name('admin.governanceBoard');
        Route::post('/governance-board/store', [AboutUsController::class, 'governanceBoardStore'])->name('admin.governanceBoard.store');
        Route::put('/governance-board/update/about-us/{id}', [AboutUsController::class, 'governanceBoardUpdate'])->name('admin.governanceBoard.update');
        
        // TransactionController
        Route::get('/transaction', [TransactionController::class, 'index'])->name('admin.transaction.index');
        Route::get('/transaction/show/{id}', [TransactionController::class, 'show'])->name('admin.transaction.show');
      
        
        // advisoryBoardMember
        Route::get('/booking', [BookingController::class, 'index'])->name('admin.booking.index');
        Route::get('/booking/show/{id}', [BookingController::class, 'show'])->name('admin.booking.show');
        // Route::put('/booking/update/{id}', [BookingController::class, 'update'])->name('admin.booking.update');
        Route::get('/booking/delete/{id}', [BookingController::class, 'destroy'])->name('admin.booking.destroy');

       
        
        //Core Value 
        Route::get('/settings/core-value', [CoreValueController::class, 'index'])->name('admin.coreValue.index');
        Route::post('/settings/store/core-value', [CoreValueController::class, 'store'])->name('admin.coreValue.store');
        Route::put('/settings/update/core-value/{id}', [CoreValueController::class, 'update'])->name('admin.coreValue.update');
        //visionMission
        Route::get('/settings/vision-mission', [VisionMissionController::class, 'index'])->name('admin.visionMission.index');
        Route::post('/settings/vision-mission/store', [VisionMissionController::class, 'store'])->name('admin.visionMission.store');
        Route::put('/settings/vision-mission/update/{id}', [VisionMissionController::class, 'update'])->name('admin.visionMission.update');
        
        //Office Hours 
        Route::get('/settings/office/hours/index', [SettingsController::class, 'indexOfficeHours'])->name('admin.officeHours.index');
        Route::post('/settings/store/office-hours', [SettingsController::class, 'storeOfficeHours'])->name('admin.office-hours.store');
        Route::put('/settings/update/office-hours/{id}', [SettingsController::class, 'updatestoreOfficeHours'])->name('admin.office-hours.update');
         
        //Contact Us 
        Route::get('/settings/contact-us', [SettingsController::class, 'getcontactUs'])->name('admin.settings.contactUs');
        Route::post('/settings/store/contact-us', [SettingsController::class, 'storeContactUs'])->name('admin.settings.storeContactUs');
        Route::put('/settings/update/contact-us/{id}', [SettingsController::class, 'updateContactUs'])->name('admin.settings.updateContactUs');
        //Social Links 
        Route::get('/sociallinks/index', [SociallinkController::class, 'index'])->name('admin.socialLink.index');
        Route::post('/settings/store/social-links', [SociallinkController::class, 'storeSocialLinks'])->name('admin.settings.storeSocialLinks');
        Route::put('/settings/update/social-links/{id}', [SociallinkController::class, 'updateSocialLinks'])->name('admin.settings.updateSocialLinks');
       

         //Privacy
        // Route::get('/index/privacypolicy', [PrivacyController::class, 'index'])->name('admin.privacyPolicy.index');
        // Route::post('/store/privacypolicy', [PrivacyController::class, 'store'])->name('admin.privacy.store');
        // Route::put('/update/privacypolicy/{id}', [PrivacyController::class, 'update'])->name('admin.privacy.update');
        
        
        
       
        //Blog 
        Route::get('blog/index', [BlogController::class, 'index'])->name('admin.blog.index');
        Route::get('blog/create', [BlogController::class, 'create'])->name('admin.blog.create');
        Route::post('post/blog', [BlogController::class, 'store'])->name('admin.blog.store');
        Route::get('blog/{id}/edit', [BlogController::class, 'edit'])->name('admin.blog.edit');
        Route::put('blog/{id}', [BlogController::class, 'update'])->name('admin.blog.update');
        Route::get('blog/{id}', [BlogController::class, 'destroy'])->name('admin.blog.destroy');
        Route::get('blog/{id}/details', [BlogController::class, 'details'])->name('blog.details');
         
        //Service
        Route::get('service/index', [ServiceController::class, 'index'])->name('admin.service.index');
        Route::get('service/create', [ServiceController::class, 'create'])->name('admin.service.create');
        Route::post('post/service', [ServiceController::class, 'store'])->name('admin.service.store');
        Route::get('service/{id}/edit', [ServiceController::class, 'edit'])->name('admin.service.edit');
        Route::put('service/{id}', [ServiceController::class, 'update'])->name('admin.service.update');
        Route::get('service/{id}', [ServiceController::class, 'destroy'])->name('admin.service.destroy');
        Route::get('service/{id}/details', [ServiceController::class, 'details'])->name('service.details');
       
        
       //CalendarController
       Route::get('system-calendar', [CalendarController::class, 'index'])->name('admin.calendar.index');

        //Testimonials
        Route::get('testimonials/index', [TestimonialsController::class, 'index'])->name('admin.testimonials.index');
        Route::get('testimonials/create', [TestimonialsController::class, 'create'])->name('admin.testimonials.create');
        Route::post('testimonials/post', [TestimonialsController::class, 'store'])->name('admin.testimonials.store');
        Route::get('testimonials/{id}/edit', [TestimonialsController::class, 'edit'])->name('admin.testimonials.edit');
        Route::put('testimonials/{id}/post', [TestimonialsController::class, 'update'])->name('admin.testimonials.update');
        Route::get('testimonials/{id}', [TestimonialsController::class, 'destroy'])->name('admin.testimonials.destroy');


        //Faqs
        Route::get('faq/index', [FAQController::class, 'index'])->name('admin.faq.index');
        Route::get('faq/create', [FAQController::class, 'create'])->name('admin.faq.create');
        Route::post('post/faq', [FAQController::class, 'store'])->name('admin.faq.store');
        Route::get('faq/{id}/edit', [FAQController::class, 'edit'])->name('admin.faq.edit');
        Route::put('faq/{id}', [FAQController::class, 'update'])->name('admin.faq.update');
        Route::get('faq/{id}', [FAQController::class, 'destroy'])->name('admin.faq.destroy');
        Route::get('faq/submt/form', [FAQController::class, 'submtFormView'])->name('admin.faq.submtForm');
        Route::get('/faq/form/view/{id}', [FAQController::class, 'submitFormShow'])->name('admin.faq.submitForm.show');
        Route::get('/faq/form/destroy/{id}', [FAQController::class, 'submitFormDestroy'])->name('admin.faq.submitForm.destroy');

        //Contact
        Route::get('/contact-form/index', [ContactFormController::class, 'index'])->name('admin.contactForm.index');
        Route::get('/contact-form/show/{id}', [ContactFormController::class, 'show'])->name('admin.contactForm.show');
        Route::get('/contact-form/destroy/{id}', [ContactFormController::class, 'destroy'])->name('admin.contactForm.destroy');
       
    
        
    });  
});
