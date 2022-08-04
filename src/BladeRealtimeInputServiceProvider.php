<?php

namespace YemeniOpenSource\BladeRealtimeInput;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class BladeRealtimeInputServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // Blade::component('string-input', StringInput::class);
        Blade::componentNamespace('YemeniOpenSource\\BladeRealtimeInput\\Components\\Forms', 'realtime-input');
        $this->loadViewsFrom(__DIR__.'/../resources/views/components/forms', 'realtime-input');
        $this->loadRoutesFrom(__DIR__.'/routes.php');
    }
}
