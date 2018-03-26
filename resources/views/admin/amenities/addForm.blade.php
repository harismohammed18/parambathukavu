@extends('admin.layout.app')

@section('content')
  <div class="row">
    <div class="col-md-6 offset-1 ">
      <div class="card">
        <div class="card-block">
          <h4 class="card-title text-center"><b>Amenities</b></h4>
          <form method="post" action="{{ route('admin.amenities.save') }}">
            @csrf
            <div class="form-group">
              <label>Name</label>
              <input type="text" class="form-control {{ $errors->has('iconName') ? ' is-invalid' : '' }}" name="iconName" id="iconName" placeholder="Amenities Name" required onfocusout="capitalize(this.id)" />
              @if ($errors->has('iconName'))
                  <span class="invalid-feedback">
                      <strong>{{ $errors->first('iconName') }}</strong>
                  </span>
              @endif
            </div>
            <div class="form-group">
              <label>Icon</label>
              <input type="text" class="form-control {{ $errors->has('iconClass') ? ' is-invalid' : '' }}" required name="iconClass" id="iconClass" placeholder="Font Awesome Icon Name"  />
              @if ($errors->has('iconClass'))
                  <span class="invalid-feedback">
                      <strong>{{ $errors->first('iconClass') }}</strong>
                  </span>
              @endif
            </div>
            <button class="btn btn-primary">Save</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('css')
   <link href="{{ asset('css/lib/toastr/toastr.min.css') }}" rel="stylesheet">
@endsection
@section('script')
  <script src="{{ asset('js/lib/toastr/toastr.min.js')}}"></script>
  <!-- scripit init-->

  <script>
    function capitalize(id)
    {
      var x = document.getElementById(id);
      x.value = x.value.toUpperCase();
    }
  </script>
  @if(Session::has('success'))
    {{-- <body onload="showSuccessToaster()" ></body> --}}
    <script>
    toastr.success('Successfully saved','Success',{
        timeOut: 5000,
        "closeButton": true,
        "debug": false,
        "newestOnTop": true,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": true,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut",
        "tapToDismiss": false

    })
    </script>
  @endif

@endsection
