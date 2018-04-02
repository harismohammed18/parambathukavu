@extends('admin.layout.app')

@section('content')
  <div class="row">
    <div class="col-md-6 offset-1 ">
      <div class="card">
        <div class="card-block">
          <h4 class="card-title text-center"><b>Vazhipadu</b></h4>
          @if(isset($vazhipadus) && $vazhipadus->count() > 0)
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Price</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($vazhipadus as $vazhipadu )
                  <tr>
                    <td scope="row">{{ $loop->iteration }}</td>
                    <td> {{ $vazhipadu->name }} </td>
                    <td> {{ $vazhipadu->price }} </td>
                    <td> <button class="btn btn-link btn-sm" data-toggle="modal" data-target="#removeWarn{{$vazhipadu->id}}" >Remove</button></td>
                    <td> <button class="btn btn-dark btn-outline btn-sm" data-toggle="modal" data-target="#editwarn{{$vazhipadu->id}}">Edit</button></td>
                    <!--delete warnng model -->
                    <div class="modal" id="removeWarn{{$vazhipadu->id}}" tabindex="-1" role="dialog" aria-labelledby="Terms and conditions" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h3 class="modal-title text-capitalize text-center">warning !!</h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <strong>Do You Want To Delete?</strong>
                            <br><b>Vazhipadu [ {{ $vazhipadu->name }} ]  will be removed !!</b>
                          </div>
                          <div class="modal-footer">
                            <a href="{{url('vazhipadu/remove').'/'.$vazhipadu->id}}" class="btn btn-link">Remove</a>
                            <button type="button"  class="btn btn-primary " data-dismiss="modal">Cancel</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--Edit warnng model -->
                    <div class="modal" id="editwarn{{$vazhipadu->id}}" tabindex="-1" role="dialog" aria-labelledby="Terms and conditions" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h3 class="modal-title text-capitalize text-center">warning !!</h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <strong>Do You Want To Edit?</strong>
                            <br><b>Vazhipadu [ {{ $vazhipadu->name }} ] !!</b>
                          </div>
                          <div class="modal-footer">
                            <a href="{{url('vazhipadu/edit').'/'.$vazhipadu->id}}" class="btn btn-link">Edit</a>
                            <button type="button"  class="btn btn-primary " data-dismiss="modal">Cancel</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </tr>
                @endforeach
              </tbody>
            </table>
          @endif
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
    toastr.success('Successfully Deleted','Deleted',{
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
  @if(Session::has('updated'))
    {{-- <body onload="showSuccessToaster()" ></body> --}}
    <script>
    toastr.success('Successfully Updated','Edit',{
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
