<?php

namespace GMJ\LaravelBlock2Recaptcha;

use GMJ\LaravelBlock2Recaptcha\Http\Livewire\Block;
use GMJ\LaravelBlock2Recaptcha\View\Components\Wrapper;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class LaravelBlock2RecaptchaServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'LaravelBlock2Recaptcha');
        //GMJ.LaravelLivewire2Content.Http.Livewire.Backend

        Blade::component('LaravelBlock2Recaptcha', Wrapper::class);
        Livewire::component("LaravelBlock2RecaptchaLivewire", Block::class);

        $this->publishes([
            __DIR__ . "/config/laravel_block2_recaptcha_config.php" => config_path("gmj/laravel_block2_recaptcha_config.php"),
        ], 'GMJ\LaravelBlock2Recaptcha');
    }


    public function register()
    {
    }
}
