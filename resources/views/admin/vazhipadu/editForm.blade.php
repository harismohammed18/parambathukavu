@extends('admin.layout.app')

@section('content')
  <div class="row">
    <div class="col-md-11 offset-1 ">
      <div class="card">
        <div class="card-block">
          <h4 class="card-title text-center"><b>Vazhipadu</b></h4>
        @if (isset($vazhipadu))
          <form method="post" action="{{ route('vazhipadu.update') }}" enctype="multipart/form-data" >
            @csrf
            <input type="hidden" name="id" value="{{ $vazhipadu->id }}" />
            <div class="form-group">
              <label>Vazhipadu Name</label>
              <input type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="name" placeholder="Vazhipadu Name" required onfocusout="capitalize(this.id)" value="{{ $vazhipadu->name }}" />
              @if ($errors->has('name'))
                  <span class="invalid-feedback">
                      <strong>{{ $errors->first('name') }}</strong>
                  </span>
              @endif
            </div>
            <div class="form-group">
              <label>Vazhipadu Price</label>
              <input type="number" class="form-control {{ $errors->has('price') ? ' is-invalid' : '' }}" required name="price" id="price" placeholder="Vazhipadu Price" value="{{ $vazhipadu->price }}" />
              @if ($errors->has('price'))
                  <span class="invalid-feedback">
                      <strong>{{ $errors->first('price') }}</strong>
                  </span>
              @endif
            </div>
            <div class="form-group">
              <label>About </label>
              <textarea class="textarea_editor form-control" name="aim" rows="10" placeholder="About" required style="height:450px">{{ $vazhipadu->aim }}</textarea>
              @if ($errors->has('newsText'))
                  <span class="invalid-feedback">
                      <strong>{{ $errors->first('newsText') }}</strong>
                  </span>
              @endif
            </div>

            <button class="btn btn-primary">Save</button>
          </form>
        @else
          <h4>Invalid Selection</h4>
        @endif
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
