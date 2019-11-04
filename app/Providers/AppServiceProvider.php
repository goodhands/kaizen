<?php

namespace App\Providers;

use App\Category;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive(
            'ifStranger',
            function($user){
                return "<?php if(auth()->guest() || auth()->user() !== $user): ?>";
            });
        
        /*** making the categories available to filter */
        view()->composer('partials.filter', function ($view) {
            $view->with('categories', Category::all());
        });
            
        Schema::defaultStringLength(191);                 
    }
}
