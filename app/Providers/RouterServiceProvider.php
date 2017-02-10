<?php

namespace App\Providers;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class RouterServiceProvider implements ServiceProviderInterface
{
    public function register(Container $app)
    {
        /**
         * Main Route
         */
        $app->get('/', 'home:index');
    }
}