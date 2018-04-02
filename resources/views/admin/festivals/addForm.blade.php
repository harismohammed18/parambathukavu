@extends('admin.layout.app')

@section('content')
  <div class="row">
    <div class="col-md-11 offset-1 ">
      <div class="card">
        <div class="card-block">
          <h4 class="card-title text-center"><b>Festival</b></h4>
          <form method="post" action="{{ route('festival.save') }}" enctype="multipart/form-data" >
            @csrf
            <div class="form-group">
              <label> Name</label>
              <input type="text" class="form-control {{ $errors->has('festName') ? ' is-invalid' : '' }}" name="festName" id="festName" placeholder=" Name" required onfocusout="capitalize(this.id)" />
              @if ($errors->has('festName'))
                  <span class="invalid-feedback">
                      <strong>{{ $errors->first('festName') }}</strong>
                  </span>
              @endif
            </div>

            <div class="form-group">
              <label>About</label>
              {{-- <textarea class="form-control {{ $errors->has('about') ? ' is-invalid' : '' }} " rows="10"  required name="about" id="about"  /></textarea> --}}
              <textarea class="textarea_editor form-control" name="about" rows="10" placeholder="About" required style="height:450px"></textarea>
              @if ($errors->has('about'))
                  <span class="invalid-feedback">
                      <strong>{{ $errors->first('about') }}</strong>
                  </span>
              @endif
            </div>
            <div class="form-group">
              <label>Picture</label>
              <input type="file" class="form-control {{ $errors->has('picture') ? ' is-invalid' : '' }}" required name="picture" id="picture" placeholder="News Image" accept="image/*"  />
              @if ($errors->has('picture'))
                  <span class="invalid-feedback">
                      <strong>{{ $errors->first('picture') }}</strong>
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
   <link rel="stylesheet" href="{{ asset('css/lib/html5-editor/bootstrap-wysihtml5.css') }}" />
   <link href="{{ asset('css/lib/toastr/toastr.min.css') }}" rel="stylesheet">
   <style>
      label{
        font-weight: bold;
        color:#000;
      }
   </style>
@endsection
@section('script')
  <script src="{{ asset('js/lib/toastr/toastr.min.js')}}"></script>
  <!--stickey kit -->
    <script src="{{ asset('js/lib/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
    <script src="{{ asset('js/lib/html5-editor/wysihtml5-0.3.0.js')}}"></script>
    <script src="{{ asset('js/lib/html5-editor/bootstrap-wysihtml5.js')}}"></script>
    <script src="{{ asset('js/lib/html5-editor/wysihtml5-init.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('js/custom.min.js')}}"></script>
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
