@php($error_name = isset($error_name) ? $error_name : period_case($name))

<div class="form-group">

    @if(is_null($title) || !empty($title) || $title != false )
        {{ Form::label($name, $title, ['class' => 'control-label']) }}
    @endif

    @if(!empty($group))
        <div class="input-group">
    @endif

    @if(!empty($group['before']))
        <div class="input-group-addon">{{$group['before']}}</div>
    @endif

    @include("components.form.group.$type", $input_data)

    @if(!empty($group['after']))
        <div class="input-group-addon">{{$group['after']}}</div>
    @endif

    @if(!empty($group))
        </div>
    @endif

    @if($errors->has($error_name))
        <div class="invalid-feedback">
            <strong>{{ $errors->first($error_name) }}</strong>
        </div><br />
    @endif

    @if(!empty($help))
        <span class="help-block">
            <strong>{{$help}}</strong>
        </span>
    @endif


</div>
