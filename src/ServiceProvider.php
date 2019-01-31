<?php

namespace Artifishall\BootstrapForms;

use Form;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'bootstrap_forms');

        Form::component('bsText', 'bootstrap_forms::formgroup', ['name', 'value' => null, 'title' => null, 'attributes' => [], 'error_msg' => null, 'error_name' => null, 'input' => 'text']);
        Form::component('bsDate', 'bootstrap_forms::formgroup', ['name', 'value' => null, 'title' => null, 'attributes' => [], 'error_msg' => null, 'error_name' => null, 'input' => 'date']);
        Form::component('bsTextarea', 'bootstrap_forms::formgroup', ['name', 'value' => null, 'title' => null, 'attributes' => [], 'error_msg' => null, 'error_name' => null, 'input' => 'textarea']);
        Form::component('bsSelect', 'bootstrap_forms::formgroup', ['name', 'options', 'value' => null, 'title' => null, 'attributes' => [], 'error_msg' => null, 'error_name' => null, 'input' => 'select']);
        Form::component('bsSubmit', 'bootstrap_forms::submit', ['name', 'style' => 'primary', 'value' => null, 'attributes' => []]);
        Form::component('bsButton', 'bootstrap_forms::button', ['name', 'style' => 'primary', 'value' => null, 'attributes' => []]);
        Form::component('bsReset', 'bootstrap_forms::reset', ['name', 'style' => 'info', 'value' => null, 'attributes' => []]);
        Form::component('Delete', 'bootstrap_forms::delete', ['route', 'model', 'size' => null, 'title' => 'Delete', 'icon' => '<i class="fa fa-fw fa-trash"></i>']);

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
