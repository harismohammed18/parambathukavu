@extends('layouts.app')

@section('content')
  <div class="col-sm-12">
    <h3 class="text-center margin-top-20-h3"><b><big>@if(isset($news)) {{ $news->title }}@endif</big></b></h3>
  </div>
  <div class="container" style="margin-bottom:30px;">
    @if(isset($news))
      <div class="row">
        <div class="col-sm-7 offset-sm-1 col-md-7 offset-md-1 text-justify">
          <strong><label class="text-info">@php $date=date_create($news->date); @endphp {{ date_format($date,"d/M/Y ")}}</label> <big>:-</big></strong>{!! $news->news !!}
        </div>
        <div class="col-sm-4  col-md-4 ">
          <img class="img-fluid" src="{{ asset('/newsImages'.'/'.$news->image) }}" alt="{{ $news->title }}">
        </div>
      </div>
    @endif
  </div>
@endsection
