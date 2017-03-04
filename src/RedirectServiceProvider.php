<?php

namespace Amsterdamys\OctoberCmsBackendOnly;

use Illuminate\Support\ServiceProvider;

class RedirectServiceProvider extends ServiceProvider
{
    /**
     * Determines if project is running not in backend, and if yes - redirects to backend
     *
     * @return void
     */
    public function register()
    {
        if (!app()->runningInBackend() && !app()->runningInConsole() && !app()->runningUnitTests()) {
            header('Location: /backend');

            exit;
        }
    }
}
