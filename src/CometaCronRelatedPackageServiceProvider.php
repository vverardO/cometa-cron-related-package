<?php

namespace vverardo\UserTransactions;

use Illuminate\Support\ServiceProvider;

class CometaCronRelatedPackageServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/Models' => app_path('Models'),
        ], 'cometa-cron-related-package-models');
    }

    public function register()
    {
        //
    }
}
