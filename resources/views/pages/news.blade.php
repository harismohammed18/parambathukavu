@extends('layouts.app')

@section('content')
  <a href="javascript:" id="return-to-top"><i class="oi oi-caret-top"></i></a>
  <div class="bg-gray">
    <div class="parallax">
      <h1 class="text-center main-heading">ശ്രീ പറമ്പത്ത് കാവ്  ഭഗവതീക്ഷേത്രം  </h1>
      <p class="main-text text-center">
          The best place for worship for Hindu Сommunity.Let your mind grow deeper and more enriched.Amazing bridge between the divine and mankind...
      </p>
    </div>
  </div>
  <div class="col-sm-12">
    <h3 class="text-center margin-top-20-h3"><b><big><u>NEWS</u></big></b></h3>
  </div>
  <div class="col-sm-12 margin-top-15 margin-top-20 bg-gray text-justify " style="padding-bottom:10px;">
    <div class="card-deck" style="padding-top:20px;">
      @if(isset($news))
        @foreach ($news as $new)
          <div class="card">
            <img class="card-img-top" src="{{ asset('/newsImages'.'/'.$new->image) }}" alt="Card image cap">
            <div class="card-body" style="border-top:dotted 1px #bbb;">
              <h5 class="card-title"><b>{{ $new->title }}</b></h5>
              <p class="card-text">ശ്രീ പറമ്പത്ത് കാവ് ഭഗവതീക്ഷേത്രം...</p>
              <a class="btn btn-info" href="{{ url('/newsOpen').'/'.$new->id }}">View Details</a>
            </div>
            <div class="card-footer " >
              <big class="text-muted ">@php $date=date_create($new->date); @endphp {{ date_format($date,"d/M/Y ")}}</big>
            </div>
          </div>
        @endforeach
      @endif
    </div>
    <div class="row justify-content-end" style="margin-top:10px;">
      <div class="col-4">
      </div>
      <div class="col-4">
        {{ $news->links() }}
      </div>
      <div class="col-4">
      </div>
    </div>
  </div>
@endsection
