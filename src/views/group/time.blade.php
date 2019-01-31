@if($errors->has($error_name))
    @php($attributes['class'] .= ' is-invalid')
@endif

<div class="row">
        <div class="col">
            {{ Form::select("{$name}[h]", hour_array(), isset($value) ? $value->format('g') : 10, $attributes ) }}
        </div>
        <div class="col">
            {{ Form::select("{$name}[m]", minute_array(), isset($value) ? $value->format('i') : 0, $attributes ) }}
        </div>
        <div class="col">
            {{ Form::select("{$name}[a]", period_array(), isset($value) ? $value->format('a') : 'pm', $attributes ) }}
        </div>
</div>
