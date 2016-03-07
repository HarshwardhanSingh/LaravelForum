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
        </div>
      </div>
    </div>
  </div>

@endsection
