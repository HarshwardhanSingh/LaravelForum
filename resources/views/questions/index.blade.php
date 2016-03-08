@extends('layouts.master')


@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <h3>Recent Questions:</h3>
      <hr/>
      @foreach ($questions as $question)
        <div class="question">
          <div class="panel-heading">
            <h4>{{ link_to_route('questions.show',$question->title,array($question->id)) }}</h4>
            <div class="timestamp">
              {{ $question->created_at->diffforHumans()}}
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>

@endsection
