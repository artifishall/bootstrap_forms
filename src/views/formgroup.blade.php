@php
    $error_name = $error_name ?: period_case($name);
    $form_control = $errors->has($error_name) ? 'form-control is-invalid' : 'form-control';
@endphp

<div class="form-group{{$errors->has($error_name) ? ' has-error' : null}}">

    @if(is_null($title) || !empty($title) || $title != false )
        {{ Form::label($name, $title, ['class' => 'control-label']) }}
    @endif

    @switch($input)
        @case('text')
            {{ Form::text($name, $value, array_merge(['class' => $form_control], $attributes)) }}
        @break
        @case('select')
            {{ Form::select($name, $options, $value, array_merge(['class' => "$form_control selectpicker"], $attributes)) }}
        @break
        @case('textarea')
            {{ Form::textarea($name, $value, array_merge(['class' => $form_control], $attributes)) }}
        @break
        @case('date')
            {{ Form::text($name, $value, array_merge(['class' => "$form_control datepicker"], $attributes)) }}
        @break

    @endswitch

    @if ($errors->has($error_name))
        <span class="help-block invalid-feedback">
            <strong>{{$error_msg ?: $errors->first($error_name)}}</strong>
        </span>
    @endif
</div>
