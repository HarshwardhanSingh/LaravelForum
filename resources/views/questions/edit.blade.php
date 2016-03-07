@extends('layouts.master')

@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      {!! Form::model($question,array('route'=>array('questions.update',$question->id),'method'=>'put')) !!}
        <div class="form-group">
          {!! Form::label('title') !!}
          {!! Form::text('title',null,array('class'=>'form-control')) !!}
        </div>
        <div class="form-group">
          {!! Form::label('content') !!}
          {!! Form::textarea('content',null,array('class'=>'form-control')) !!}
        </div>
        <div class="form-group">
          {!! Form::token() !!}
          {!! Form::submit('Submit',array('class'=>'btn btn-primary')) !!}
        </div>
      {!! Form::close() !!}
    </div>
  </div>
@endsection
