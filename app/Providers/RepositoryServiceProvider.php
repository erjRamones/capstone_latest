<?php

namespace App\Providers;

use App\Interface\Repository\CustomerRepositoryInterface;
use App\Interface\Repository\DBLibraryRepositoryInterface;
use App\Interface\Repository\UserRepositoryInterface;
use App\Interface\Service\AuthenticationServiceInterface;
use App\Interface\Service\CustomerServiceInterface;
use App\Interface\Service\DBLibraryServiceInterface;
use App\Repository\CustomerRepository;
use App\Repository\DBLibraryRepository;
use App\Repository\UserRepository;
use App\Service\AuthenticationService;
use App\Service\CustomerService;
use App\Service\DBLibraryService;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //Repository
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(DBLibraryRepositoryInterface::class, DBLibraryRepository::class);
        $this->app->bind(CustomerRepositoryInterface::class, CustomerRepository::class);

        //Service
        $this->app->bind(CustomerServiceInterface::class, CustomerService::class);
        $this->app->bind(DBLibraryServiceInterface::class, DBLibraryService::class);
        $this->app->bind(AuthenticationServiceInterface::class, AuthenticationService::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
