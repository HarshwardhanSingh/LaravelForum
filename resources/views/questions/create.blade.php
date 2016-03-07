@extends('layouts.master')

@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      @if($errors->count())
  				<ul class="alert alert-danger">
  				@foreach($errors->all() as $error)
  					<li>{{ $error }}</li>
  				@endforeach
  				</ul>
  			@endif
      {!! Form::open(array('route'=>'questions.store')) !!}
        <div class="form-group">
          {!! Form::label('title') !!}
          {!! Form::text('title',null,array('class'=>'form-control','placeholder'=>'Question Title')) !!}
        </div>
        <div class="form-group">
          {!! Form::label('content') !!}
          {!! Form::textarea('content',null,array('class'=>'form-control','placeholder'=>'Describe your question in detail','rows'=>'5')) !!}
        </div>
        <div class="form-group">
          {!! Form::token() !!}
          {!! Form::submit('Submit',array('class'=>'btn btn-primary')) !!}
        </div>
      {!! Form::close() !!}
    </div>
  </div>
@endsection
