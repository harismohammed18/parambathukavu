@extends('layouts.app')

@section('content')
  <a href="javascript:" id="return-to-top"><i class="oi oi-caret-top"></i></a>
  <div class="bg-gray">
    <div class="parallax">
      <h1 class="text-center main-heading">Parambath Kavu </h1>
      <p class="main-text text-center">
          The best place for worship for Hindu Сommunity.Let your mind grow deeper and more enriched.Amazing bridge between the divine and mankind...
      </p>
    </div>
    <div class="margin-adjust">
      <div class="col-sm-12 ">
        <div class="card-deck-wrapper">
          <div class="card-deck">
            <div class="card border-black">
              <img  class="card-img-top lazy" data-src="{{ asset('/img/example.jpg')}}" alt="Card image cap">
              <div class="card-block">
                <h4 class="card-title">Card title</h4>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
            <div class="card border-black">
              <img class="card-img-top lazy" data-src="{{ asset('/img/example.jpg')}}" alt="Card image cap">
              <div class="card-block">
                <h4 class="card-title">Card title</h4>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
            <div class="card border-black">
              <img class="card-img-top lazy" data-src="{{ asset('/img/example.jpg')}}" alt="Card image cap">
              <div class="card-block">
                <h4 class="card-title">Card title</h4>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
