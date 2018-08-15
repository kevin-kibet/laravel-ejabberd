<?php
/**
 * Created by PhpStorm.
 * User: kibet
 * Date: 7/3/2018
 * Time: 8:37 AM
 */

namespace Ejabberd\Providers;


use Ejabberd\Ejabberd;
use Illuminate\Support\ServiceProvider;

class EjabberdServiceProvider extends ServiceProvider
{
    public function register()
    {

        $this->publishConfig();

        $this->app->singleton(Ejabberd::class, function ($app) {
            $config = $app['config']->get('ejabberd');
            return new Ejabberd($config);
        });
    }

    public function provides()
    {
        return Ejabberd::class;
    }

    private function publishConfig()
    {
        $path = $this->getConfigPath();
        $this->publishes([$path => config_path('ejabberd.php')]);
    }

    private function getConfigPath()
    {
        return __DIR__ . '/../config/ejabberd.php';
    }
}