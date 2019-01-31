{{ Form::open(['route' => [$route, $model->id], 'method' => 'delete', 'class' => 'delete-form']) }}
{!! Form::button("$icon $title", ['class' => trim("btn btn-danger $size"), 'type' => 'submit']) !!}
{{ Form::close() }}
