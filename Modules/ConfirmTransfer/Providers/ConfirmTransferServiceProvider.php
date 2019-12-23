<?php

namespace Modules\ConfirmTransfer\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Factory;

class ConfirmTransferServiceProvider extends ServiceProvider
{
    /**
     * Boot the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerTranslations();
        $this->registerConfig();
        $this->registerViews();
        $this->registerFactories();
        $this->loadMigrationsFrom(module_path('ConfirmTransfer', 'Database/Migrations'));
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);
    }

    /**
     * Register config.
     *
     * @return void
     */
    protected function registerConfig()
    {
        $this->publishes([
            module_path('ConfirmTransfer', 'Config/config.php') => config_path('confirmtransfer.php'),
        ], 'config');
        $this->mergeConfigFrom(
            module_path('ConfirmTransfer', 'Config/config.php'), 'confirmtransfer'
        );
    }

    /**
     * Register views.
     *
     * @return void
     */
    public function registerViews()
    {
        $viewPath = resource_path('views/modules/confirmtransfer');

        $sourcePath = module_path('ConfirmTransfer', 'Resources/views');

        $this->publishes([
            $sourcePath => $viewPath
        ],'views');

        $this->loadViewsFrom(array_merge(array_map(function ($path) {
            return $path . '/modules/confirmtransfer';
        }, \Config::get('view.paths')), [$sourcePath]), 'confirmtransfer');
    }

    /**
     * Register translations.
     *
     * @return void
     */
    public function registerTranslations()
    {
        $langPath = resource_path('lang/modules/confirmtransfer');

        if (is_dir($langPath)) {
            $this->loadTranslationsFrom($langPath, 'confirmtransfer');
        } else {
            $this->loadTranslationsFrom(module_path('ConfirmTransfer', 'Resources/lang'), 'confirmtransfer');
        }
    }

    /**
     * Register an additional directory of factories.
     *
     * @return void
     */
    public function registerFactories()
    {
        if (! app()->environment('production') && $this->app->runningInConsole()) {
            app(Factory::class)->load(module_path('ConfirmTransfer', 'Database/factories'));
        }
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }
}
