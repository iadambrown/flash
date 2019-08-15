<?php

namespace iAdamBrown\Flash;

use Illuminate\Support\ServiceProvider;

class FlashServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(): void
    {
        include __DIR__.'/routes/web.php';

        $this->loadViewsFrom(__DIR__ . '/views', 'flash');
        $this->publishes([
            __DIR__ . '/views' => base_path('resources/views/vendor/flash')
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->bind(
            'AdamBrown\Flash\SessionStore',
            'AdamBrown\Flash\LaravelSessionStore'
        );

        $this->app->singleton('flash', function () {
            return $this->app->make(FlashNotifier::class);
        });
    }
}
