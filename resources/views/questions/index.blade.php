@extends('layouts.master')


@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      @foreach ($questions as $question)
        <div class="question">
          <div class="panel-heading">
            <h4>{{ link_to_route('questions.show',$question->title,array($question->id)) }}</h4>
          </div>
          <div class="panel-body">
            {{ $question->content }}
          </div>
        </div>
      @endforeach
    </div>
  </div>

@endsection
