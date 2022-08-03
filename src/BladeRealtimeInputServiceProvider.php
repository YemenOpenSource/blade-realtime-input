<?php

namespace YemeniOpenSource\BladeRealtimeInput;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use YemeniOpenSource\BladeRealtimeInput\Components\Forms\StringInput;

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
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'realtime-input');
        $this->loadRoutesFrom(__DIR__.'/routes.php');
    }
}
