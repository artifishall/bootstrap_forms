@if($errors->has($error_name))
    @php($attributes['class'] .= ' is-invalid')
@endif

{{ Form::number($name, $value, $attributes) }}
