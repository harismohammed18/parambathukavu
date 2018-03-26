@extends('admin.layout.app')

@section('content')
  <div class="row">
    <div class="col-md-3">
      <div class="card bg-primary p-20">
        <div class="media widget-ten">
          <div class="media-left meida media-middle">
            <span><i class="fa fa-usd f-s-40"></i></span>
          </div>
          <div class="media-body media-text-right">
            <h2 class="color-white">278</h2>
            <p class="m-b-0">Total Revenue</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card bg-pink p-20">
        <div class="media widget-ten">
          <div class="media-left meida media-middle">
            <span><i class="fa fa-shopping-cart f-s-40"></i></span>
          </div>
          <div class="media-body media-text-right">
            <h2 class="color-white">278</h2>
            <p class="m-b-0">Sales</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card bg-danger p-20">
        <div class="media widget-ten">
          <div class="media-left meida media-middle">
             <span><i class="fa fa-home f-s-40"></i></span>
          </div>
          <div class="media-body media-text-right">
            <h2 class="color-white">278</h2>
            <p class="m-b-0">Host</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card bg-success p-20">
        <div class="media widget-ten">
          <div class="media-left meida media-middle">
            <span><i class="fa fa-user f-s-40"></i></span>
          </div>
          <div class="media-body media-text-right">
            <h2 class="color-white">278</h2>
            <p class="m-b-0">Users</p>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
