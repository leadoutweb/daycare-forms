<?php

namespace Leadout\Daycare\Forms;

use Illuminate\Support\ServiceProvider;

class FormServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../resources/assets/js/components/FormGroups' => resource_path('assets/js/vendor/forms/FormGroups')
        ], 'daycare-forms');
    }
}
