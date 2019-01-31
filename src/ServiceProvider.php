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

        Form::component('bsText', 'bootstrap_forms::group', ['name', 'value' => null, 'title' => null, 'attributes' => [], 'extras' => null, 'type' => 'text']);
        Form::component('bsTime', 'bootstrap_forms::group', ['name', 'value' => null, 'title' => null, 'attributes' => [], 'extras' => null, 'type' => 'time']);
        Form::component('bsDate', 'bootstrap_forms::group', ['name', 'value' => null, 'title' => null, 'attributes' => [], 'extras' => null, 'type' => 'date']);
        Form::component('bsNumber', 'bootstrap_forms::group', ['name', 'value' => null, 'title' => null, 'attributes' => [], 'extras' => null, 'type' => 'number']);
        Form::component('bsTextarea', 'bootstrap_forms::group', ['name', 'value' => null, 'title' => null, 'attributes' => [], 'extras' => null, 'type' => 'textarea']);
        Form::component('bsSelect', 'bootstrap_forms::group', ['name', 'options', 'value' => null, 'title' => null, 'attributes' => [], 'extras' => null, 'type' => 'select']);
        Form::component('bsRadio', 'bootstrap_forms::group', ['name', 'options', 'value' => null, 'title' => null, 'attributes' => [], 'extras' => null, 'type' => 'radio']);

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
