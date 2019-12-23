<?php

namespace Modules\DaftarDonasi\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Factory;

class DaftarDonasiServiceProvider extends ServiceProvider
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
        $this->loadMigrationsFrom(module_path('DaftarDonasi', 'Database/Migrations'));
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
            module_path('DaftarDonasi', 'Config/config.php') => config_path('daftardonasi.php'),
        ], 'config');
        $this->mergeConfigFrom(
            module_path('DaftarDonasi', 'Config/config.php'), 'daftardonasi'
        );
    }

    /**
     * Register views.
     *
     * @return void
     */
    public function registerViews()
    {
        $viewPath = resource_path('views/modules/daftardonasi');

        $sourcePath = module_path('DaftarDonasi', 'Resources/views');

        $this->publishes([
            $sourcePath => $viewPath
        ],'views');

        $this->loadViewsFrom(array_merge(array_map(function ($path) {
            return $path . '/modules/daftardonasi';
        }, \Config::get('view.paths')), [$sourcePath]), 'daftardonasi');
    }

    /**
     * Register translations.
     *
     * @return void
     */
    public function registerTranslations()
    {
        $langPath = resource_path('lang/modules/daftardonasi');

        if (is_dir($langPath)) {
            $this->loadTranslationsFrom($langPath, 'daftardonasi');
        } else {
            $this->loadTranslationsFrom(module_path('DaftarDonasi', 'Resources/lang'), 'daftardonasi');
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
            app(Factory::class)->load(module_path('DaftarDonasi', 'Database/factories'));
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
