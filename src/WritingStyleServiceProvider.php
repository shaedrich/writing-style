<?php

namespace LaravelWorkingGroup\WritingStyle;


use Illuminate\Support\ServiceProvider;

class WritingStyleServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/writing-style.php', 'writing-style'
        );
    }

    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/writing-style.php' => config_path('writing-style.php'),
        ]);
    }
}
