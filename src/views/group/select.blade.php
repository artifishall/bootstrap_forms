@if($errors->has($error_name))
    @php($attributes['class'] .= ' is-invalid')
@endif

{{ Form::select($name, $options, $value, $attributes ) }}
