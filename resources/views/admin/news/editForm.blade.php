@extends('admin.layout.app')

@section('content')
  <div class="row">
    <div class="col-md-11 offset-1 ">
      <div class="card">
        <div class="card-block">
          <h4 class="card-title text-center"><b>News </b></h4>
          @if(isset($news))
            <form method="post" action="{{ route('news.update') }}" >
              @csrf
              <input type="hidden" name="id" value="{{ $news->id }}" />
              <div class="form-group">
                <label>News Title</label>
                <input type="text" class="form-control {{ $errors->has('newsTitle') ? ' is-invalid' : '' }}" name="newsTitle" id="newsTitle" placeholder="News Title" required onfocusout="capitalize(this.id)" value="{{ $news->title }}" />
                @if ($errors->has('newsTitle'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('newsTitle') }}</strong>
                    </span>
                @endif
              </div>
              <div class="form-group">
                <label>News Date</label>
                <input type="Date" class="form-control {{ $errors->has('newsDate') ? ' is-invalid' : '' }}" required name="newsDate" id="newsDate" placeholder="News Date" value="{{ $news->date }}"  />
                @if ($errors->has('newsDate'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('newsDate') }}</strong>
                    </span>
                @endif
              </div>
              <div class="form-group">
                <label>News </label>
                {{-- <textarea class="form-control {{ $errors->has('newsText') ? ' is-invalid' : '' }} " rows="10"  required name="newsText" id="newsText"  /></textarea> --}}
                <textarea class="textarea_editor form-control" name="newsText" rows="10" placeholder="News" required style="height:450px">{{ $news->news }}</textarea>
                @if ($errors->has('newsText'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('newsText') }}</strong>
                    </span>
                @endif
              </div>

              <button class="btn btn-primary">Save</button>
            </form>
          @else
            Invalid News
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
