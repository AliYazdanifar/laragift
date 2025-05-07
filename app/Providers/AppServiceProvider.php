<?php

namespace App\Providers;

use App\Repositories\Gift\GiftRepository;
use App\Repositories\Gift\GiftRepositoryInterface;
use App\Services\GiftService;
use App\Services\GiftServiceInterface;
use App\Strategies\Scoring\GiftScoringStrategyInterface;
use App\Strategies\Scoring\SimpleScoringStrategy;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(GiftRepositoryInterface::class, GiftRepository::class);
        $this->app->bind(GiftServiceInterface::class, GiftService::class);
        $this->app->bind(GiftScoringStrategyInterface::class, SimpleScoringStrategy::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
