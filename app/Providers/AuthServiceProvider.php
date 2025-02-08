<?php

namespace App\Providers;

use App\Models\Product; // Import your Product model
use App\Policies\ProductPolicy; // Import your ProductPolicy
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;


class AuthServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */

    protected $policies = [
        Product::class => ProductPolicy::class, // Register the policy here
    ];

    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
