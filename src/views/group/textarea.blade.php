@if($errors->has($error_name))
    @php($attributes['class'] .= ' is-invalid')
@endif

{{ Form::textarea($name, $value, $attributes) }}
