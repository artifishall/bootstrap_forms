<?php

namespace Artifishall\BootstrapForms\ViewComposers;

use Illuminate\View\View;
use Illuminate\Support\MessageBag;

class ComponantComposer
{
    public function __construct()
    {

    }

    /**
     * Bind data to the view.
     *
     * param  View  $view
     * return void
     */
    public function compose(View $view)
    {
        $data = $view->getData();

        if(isset($data['extras']) && is_array($data['extras'])){
            extract($data['extras']);
        }

        $error_name = isset($error_name) ? $error_name : period_case($data['name']);

        $class = 'form-control';

        if(isset($errors) && $errors->has($error_name)){
            $class .= ' is-invalid';
        }

        if(is_array($data['attributes']) && isset($data['attributes']['class'])){
            $data['attributes']['class'] .= " $class";
        }else{
            $data['attributes']['class'] = $class;
        }

        if($data['type'] == 'date' ){
            $data['attributes']['class'] .= ' datepicker';
        }

        // \Debugbar::info($attributes['class']);
        $view->with('error_name', $error_name);
        $view->with('input_data', $data);
    }
}
