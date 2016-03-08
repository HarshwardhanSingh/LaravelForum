@extends('layouts.master')


@section('content')
  <div class="row">
    <div class="col-md-8 col-md-offset-2 middle-container">
      <div class="question">
        <div class="panel-heading">
          <h4>{{ $question->title }}</h4>
        </div>
        <div class="panel-body">
          {{ $question->content }}
          <br/>
          <br/>
          <h6>{{ $question->user->name }} - {{$question->created_at->diffforHumans()}}</h6>
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
          <div class="answer">
            <div class="panel-heading">
              <b>{{ $answer->user->name }}</b> answered :-
              <div class="timestamp">
                {{ $answer->created_at->diffforHumans()}}
              </div>
            </div>
            <div class="panel-body">
              {{ $answer->content }}
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>

@endsection
