@if($errors->has($error_name))
    @php($attributes['class'] .= ' is-invalid')
@endif

{{ Form::text($name, $value, $attributes)  }}
