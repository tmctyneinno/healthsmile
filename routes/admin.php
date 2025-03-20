<?php 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\GoogleCalendarController;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\LivestreamController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\MembersController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\ConsultantController;
use App\Http\Controllers\Admin\CoreActivitiesController; 
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\AboutUsController;
use App\Http\Controllers\Admin\CoreValueController;
use App\Http\Controllers\Admin\VisionMissionController;
use App\Http\Controllers\Admin\SociallinkController; 
use App\Http\Controllers\Admin\TestimonialsController;
use App\Http\Controllers\Admin\FAQController;
use App\Http\Controllers\Admin\CareerController;
use App\Http\Controllers\Admin\ContactFormController;
use App\Http\Controllers\Admin\AdovacyPolicyController;
use App\Http\Controllers\Admin\AdvisoryBoardMemberController;
use App\Http\Controllers\Admin\ApplicationController;
use App\Http\Controllers\Admin\CertificationController;



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
        Route::get('/transaction', [AdminController::class, 'transaction'])->name('admin.transaction.index');
     
        //About us
        Route::get('/settings/about-us', [SettingsController::class, 'getAboutUs'])->name('admin.settings.aboutUs');
        Route::post('/settings/store/about-us', [SettingsController::class, 'storeAboutUs'])->name('admin.settings.storeAboutus');
        Route::put('/settings/update/about-us/{id}', [SettingsController::class, 'updateAboutUs'])->name('admin.settings.updateAboutus');
        // Governance-board
        Route::get('/about-us', [AboutUsController::class, 'index'])->name('admin.about-us');
        Route::get('/governance-board', [AboutUsController::class, 'governanceBoard'])->name('admin.governanceBoard');
        Route::post('/governance-board/store', [AboutUsController::class, 'governanceBoardStore'])->name('admin.governanceBoard.store');
        Route::put('/governance-board/update/about-us/{id}', [AboutUsController::class, 'governanceBoardUpdate'])->name('admin.governanceBoard.update');
        
        // AdovacyPolicy
        Route::get('/advocacyPolicy', [AdovacyPolicyController::class, 'index'])->name('admin.advocacyPolicy');
        // Route::get('/members-benefit', [AdovacyPolicyController::class, 'membersBenefit'])->name('admin.members.membersBenefit');
        Route::post('/policies-governance/post', [AdovacyPolicyController::class, 'policiesGovernanceStore'])->name('admin.policiesGovernanceFramework.store');
        Route::put('/policies-governance/update/{id}', [AdovacyPolicyController::class, 'policiesGovernanceUpate'])->name('admin.policiesGovernanceFramework.update');
        // advisoryBoardMember
        Route::get('/advisory-board-member', [AdvisoryBoardMemberController::class, 'index'])->name('admin.advisoryBoardMember.index');
        Route::get('/advisory-board-member/create', [AdvisoryBoardMemberController::class, 'create'])->name('admin.advisoryBoardMember.create');
        Route::post('/advisory-board-member/store', [AdvisoryBoardMemberController::class, 'store'])->name('admin.advisoryBoardMember.store');
        Route::get('/advisory-board-member/edit/{id}', [AdvisoryBoardMemberController::class, 'edit'])->name('admin.advisoryBoardMember.edit');
        Route::put('/advisory-board-member/update/{id}', [AdvisoryBoardMemberController::class, 'update'])->name('admin.advisoryBoardMember.update');
        Route::get('/advisory-board-member/delete/{id}', [AdvisoryBoardMemberController::class, 'destroy'])->name('admin.advisoryBoardMember.destroy');

        // members
        Route::get('/members', [MembersController::class, 'index'])->name('admin.members');
       
        Route::get('/members-benefit', [MembersController::class, 'membersBenefit'])->name('admin.members.membersBenefit');
        Route::post('/members-benefit/post', [MembersController::class, 'membersBenefitStore'])->name('admin.membersBenefit.store');
        Route::put('/members-benefit/update/{id}', [MembersController::class, 'membersBenefitUpate'])->name('admin.membersBenefit.update');

        Route::get('/membership-overview', [MembersController::class, 'membersOverview'])->name('admin.members.membersOverview');
        Route::post('/membership-overview/post', [MembersController::class, 'membersOverviewStore'])->name('admin.membersOverview.store');
        Route::put('/membership-overview/update/{id}', [MembersController::class, 'membersOverviewUpate'])->name('admin.membersOverview.update');

        Route::get('/membership-subscription-fees', [MembersController::class, 'membersSubscriptionFees'])->name('admin.members.membersSubscriptionFees');
        Route::post('/membership-subscription-fees/post', [MembersController::class, 'membersSubscriptionFeesStore'])->name('admin.membersSubscriptionFees.store');
        Route::put('/membership-subscription-fees/update/{id}', [MembersController::class, 'membersSubscriptionFeesUpate'])->name('admin.membersSubscriptionFees.update');
        
        Route::get('/membership-tiers', [MembersController::class, 'membershipTiers'])->name('admin.members.membershipTiers');
        Route::post('/membership-tiers/post', [MembersController::class, 'membershipTiersStore'])->name('admin.membershipTiers.store');
        Route::put('/membership-tiers/update/{id}', [MembersController::class, 'membershipTiersUpate'])->name('admin.membershipTiers.update');
        
        Route::get('/membership-programme', [MembersController::class, 'membersProgramme'])->name('admin.members.membersProgramme');
        Route::post('/membership-programme/post', [MembersController::class, 'membersProgrammeStore'])->name('admin.membersProgramme.store');
        Route::put('/membership-programme/update/{id}', [MembersController::class, 'membersProgrammeUpate'])->name('admin.membersProgramme.update');
        
        Route::get('/membership-application', [MembersController::class, 'membershipApplication'])->name('admin.members.membershipApplication');
        Route::post('/membership-application/post', [MembersController::class, 'membershipApplicationStore'])->name('admin.membershipApplication.store');
        Route::put('/membership-application/update/{id}', [MembersController::class, 'membershipApplicationUpate'])->name('admin.membershipApplication.update');
       
        // certification
        Route::get('/certification', [CertificationController::class, 'index'])->name('admin.certification');
        Route::get('/programme-examination', [CertificationController::class, 'programmeExamination'])->name('admin.certification.programmeExamination');
        Route::post('/programme-examination/post', [CertificationController::class, 'programmeExaminationStore'])->name('admin.programmeExamination.store');
        Route::put('/programme-examination/update/{id}', [CertificationController::class, 'programmeExaminationUpate'])->name('admin.programmeExamination.update');
        
        Route::get('/exam-requirement', [CertificationController::class, 'examRequirement'])->name('admin.certification.examRequirement');
        Route::post('/exam-requirement/post', [CertificationController::class, 'examRequirementStore'])->name('admin.examRequirement.store');
        Route::put('/exam-requirement/update/{id}', [CertificationController::class, 'examRequirementUpate'])->name('admin.examRequirement.update');
       
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
       
        //Careers 
        Route::get('career/index', [CareerController::class, 'index'])->name('admin.career.index');
        Route::post('career/store/', [CareerController::class, 'store'])->name('admin.career.store');
        Route::put('career/update/{id}', [CareerController::class, 'update'])->name('admin.career.update');
       

         //Privacy
        // Route::get('/index/privacypolicy', [PrivacyController::class, 'index'])->name('admin.privacyPolicy.index');
        // Route::post('/store/privacypolicy', [PrivacyController::class, 'store'])->name('admin.privacy.store');
        // Route::put('/update/privacypolicy/{id}', [PrivacyController::class, 'update'])->name('admin.privacy.update');
        
        
        
        //Livestream
        Route::get('livestream/index', [LivestreamController::class, 'index'])->name('admin.livestream.index');
        Route::get('livestream/create', [LivestreamController::class, 'create'])->name('admin.livestream.create');
        Route::post('livestream/store', [LivestreamController::class, 'store'])->name('admin.livestream.store');
        Route::get('/livestream/{id}/edit', [LivestreamController::class, 'edit'])->name('admin.livestream.edit');
        Route::put('/livestream/{id}', [LivestreamController::class, 'update'])->name('admin.livestream.update');
        Route::get('/livestream/{id}', [LivestreamController::class, 'destroy'])->name('admin.livestream.destroy');

       
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
       
        
       //CoreActivitiesController
        Route::get('core-activities/index', [CoreActivitiesController::class, 'index'])->name('admin.coreActivities.index');
        Route::get('core-activities/create', [CoreActivitiesController::class, 'create'])->name('admin.coreActivities.create');
        Route::post('core-activities/store', [CoreActivitiesController::class, 'store'])->name('admin.coreActivities.store');
        Route::get('core-activities/{id}/edit', [CoreActivitiesController::class, 'edit'])->name('admin.coreActivities.edit');
        Route::put('core-activities/{id}', [CoreActivitiesController::class, 'update'])->name('admin.coreActivities.update');
        Route::get('core-activities/{id}', [CoreActivitiesController::class, 'destroy'])->name('admin.coreActivities.destroy');
        
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
