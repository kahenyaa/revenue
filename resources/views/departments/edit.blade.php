@extends('config')

@section('content')
  <div class="ui segment">
      {!! Form::model($department, ['url' => 'department', 'class' => 'ui form']) !!}
        <div class="field">
          {!! Form::label('name') !!}
          {!! Form::text('name', null) !!}
        </div>
        {!! Form::submit('Update', ['class' => 'ui basic button']) !!}
      {!! Form::close() !!}
  </div>
  @widget('serviceCreate', ['department' => $department ])
@endsection
