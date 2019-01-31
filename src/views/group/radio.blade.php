@if($errors->has($error_name))
    @php($attributes['class'] .= ' is-invalid')
@endif
<br/>
@foreach($options as $value => $option)
    <label>{{$option}}</label>
    {{ Form::radio($name, $value, $attributes ) }}
@endforeach
