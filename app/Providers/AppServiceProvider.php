<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Service;
// use App\Models\About; 
use App\Models\AboutUs;
use App\Models\Blog;
use App\Models\Founder;
use App\Models\Sociallink;
use App\Models\Slider;
use App\Models\Contact;
use App\Models\Gallery;
use App\Models\ContactUs;
use App\Models\VisionMission;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema; 

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('home.partial.navbar', function ($view) {
            $view->with('navServices', Service::latest()->take(5)->get());
        });
        // First, check if the database connection is valid
        if ($this->databaseExists()) {
           
            if (Schema::hasTable('services')) {
                View::share('services', Service::oldest()->paginate(20));
            }

            if (Schema::hasTable('sociallinks')) {
                View::share('sociallink', Sociallink::first());
            }

            if (Schema::hasTable('contact_us')) {
                View::share('contactUs', ContactUs::first());
            }

            if (Schema::hasTable('about_us')) {
                View::share('aboutUs', AboutUs::first());
            }

            if (Schema::hasTable('blogs')) {
                View::share('posts', Blog::latest()->paginate(20));
            } 
            if (Schema::hasTable('vision_missions')) {
                View::share('visionMission', VisionMission::first()); 
            }
            if (Schema::hasTable('founders')) {
                View::share('founder', Founder::first()); 
            }
            if (Schema::hasTable('sliders')) {
                View::share('sliders', Slider::all()->shuffle());
            }
            if (Schema::hasTable('contacts')) {
                View::share('contacts', Contact::latest()->paginate(20));
            }
            if (Schema::hasTable('galleries')) {
                View::share('galleries', Gallery::latest()->paginate(20));
            }
        }
    }

    /**
     * Check if the database connection is valid and the database name exists.
     */
    private function databaseExists(): bool
    {
        try {
            // Attempt to get the PDO connection
            DB::connection()->getPdo();
            // Additionally check if the database name is configured
            if(DB::connection()->getDatabaseName()){
                 return true;
            } else {
                 // No database name configured, treat as non-existent connection
                 return false;
            }
        } catch (\Exception $e) {
            // Catch any exception during connection attempt (e.g., wrong credentials, host down)
            return false;
        }
    }
}
