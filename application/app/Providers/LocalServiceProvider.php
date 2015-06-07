<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class LocalServiceProvider
 * @package App\Providers
 */
class LocalServiceProvider extends ServiceProvider
{

    /**
     * @return void
     */
    public function register()
    {
        if ($this->app->environment() === 'local') {
            /**
             * @see https://github.com/barryvdh/laravel-ide-helper
             */
            $this->app->register('Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider');
        }
    }
}
