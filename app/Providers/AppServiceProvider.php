<?php
namespace App\Providers;
use App\Repository\TaskRepository;
use App\Repository\TaskRepositoryInterface;
use Illuminate\Support\ServiceProvider;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind( TaskRepositoryInterface::class , TaskRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
       
    }
}
