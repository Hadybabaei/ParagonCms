<?php

namespace App\Providers;

use App\Interfaces\{Iarticle,Icategory, Idesign, Imenu,Iposition};
use App\Repositories\{ArticlesRepository,CategoriesRepository, DesignalgoritmRepository, MenusRepository,PositionRepository};
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
        $this->app->bind(Iarticle::class,ArticlesRepository::class);
        $this->app->bind(Icategory::class,CategoriesRepository::class);
        $this->app->bind(Imenu::class,MenusRepository::class);
        $this->app->bind(Iposition::class,PositionRepository::class);
        $this->app->bind(Idesign::class,DesignalgoritmRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }
}
