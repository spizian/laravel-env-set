<?php

declare(strict_types=1);

namespace spizian\EnvSet;

use spizian\EnvSet\Facades\EnvSet;
use Illuminate\Support\ServiceProvider;

class EnvSetServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(EnvSet::class, function ($app) {
            return new EnvSetEditor($app);
        });
    }
}
