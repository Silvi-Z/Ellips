<?php

namespace App\Providers;

use App\Http\ViewComposers\CarComposer;
use App\Http\ViewComposers\EventsComposer;
use App\Http\ViewComposers\SharedViewComposer;
use App\Http\ViewComposers\TourViewComposer;
use App\Http\ViewComposers\TransferCarComposer;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer([
            '*'
        ], SharedViewComposer::class . '@lang');

        view()->composer([
            'layouts.app'
        ], SharedViewComposer::class . '@socialNetworks');

        view()->composer([
            'layouts.app'
        ], SharedViewComposer::class . '@categories');

        view()->composer([
            'layouts.app'
        ], SharedViewComposer::class . '@systems');

        view()->composer([
            'companies'
        ], SharedViewComposer::class . '@clients'); view()->composer([
            'ourExperience'
        ], SharedViewComposer::class . '@statistic');


    }
}
