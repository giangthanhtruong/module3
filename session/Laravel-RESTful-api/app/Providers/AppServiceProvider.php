<?php

namespace App\Providers;

use App\Repositories\Eloquent\EloquentRepository;
use App\Repositories\Impl\CustomerRepository;
use App\Repositories\Impl\CustomerRepositoryImpl;
use App\Repositories\Impl\CustomerServiceImpl;
use App\Repositories\Repository;
use App\Repositories\Services\Ipml\CustomerService;
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
        $this->app->singleton(Repository::class, EloquentRepository::class);

        $this->app->singleton(CustomerServiceImpl::class, CustomerService::class);
        $this->app->singleton(CustomerRepositoryImpl::class, CustomerRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
