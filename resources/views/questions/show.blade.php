@extends('layouts.master')


@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <div class="question panel panel-default">
        <div class="panel-heading">
          <h4>{{ $question->title }}</h4>
        </div>
        <div class="panel-body">
          {{ $question->content }}
          <br/>
          <br/>
          <h6>Asked By: {{ $question->user->name }}</h6>
        </div>
      </div>
      <div class="answer-form">
        @if($errors->count())
  				<ul class="alert alert-danger">
  				@foreach($errors->all() as $error)
  					<li>{{ $error }}</li>
  				@endforeach
  				</ul>
  			@endif
        {!! Form::open(array('route'=>array('saveAnswer',$question->id))) !!}
          <div class="form-group">
            {!! Form::label('content','Write Answer') !!}
            {!! Form::textarea('content',null,array('class'=>'form-control','placeholder'=>'Write Answer','rows'=>'5')) !!}
          </div>
          <div class="form-actions">
            {!! Form::token() !!}
            {!! Form::submit('Post',array('class'=>'btn btn-success form-control')) !!}
          </div>
        {!! Form::close() !!}
      </div>
      <hr/>
      <div class="answers">
        @foreach($question->answers as $answer)
          <div class="answer panel panel-default">
            {{ $answer->content }}
            <h6>Answered By: {{ $answer->user->name }}</h6>
          </div>
        @endforeach
      </div>
    </div>
  </div>

@endsection
