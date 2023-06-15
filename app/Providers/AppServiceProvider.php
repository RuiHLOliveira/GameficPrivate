<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Application\Services\PersonagemService;
use App\Domain\Interfaces\Service\PersonagemServiceInterface;
use App\Application\Repositories\EloquentPersonagemRepository;
use App\Domain\Interfaces\Repository\PersonagemRepositoryInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment('local')) {
            $this->app->register(\Laravel\Telescope\TelescopeServiceProvider::class);
            $this->app->register(TelescopeServiceProvider::class);
        }

        $this->app->bind(PersonagemServiceInterface::class, PersonagemService::class);
        $this->app->bind(PersonagemRepositoryInterface::class, EloquentPersonagemRepository::class);
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
