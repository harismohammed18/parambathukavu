@extends('admin.layout.app')

@section('content')
  <div class="col-md-8">
    <div class="card">
      <div class="card-block">
        <div class="card-title">
          Gallery - {{ $images->name }}
          <p class="text-right">
            <a href="{{ url('/deleteGallery').'/'.$images->id}}" onclick="return confirm('Are you sure ?')" class="btn btn-link">Delete Gallery</a>
          </p>
        </div>
          <div class="card-body">
            @if(Session::has('success'))
            <p class="alert alert-success text-danger">{{ Session::get('success') }}</p>
            @endif
            @if (isset($images) && $images->count() > 0)
              <div class="table-responsive">
                <table class="table table-hover text-center">
                    <thead>
                      <tr>
                        <th>Sl:No</th>
                        <th>Image</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($images->getImages as $image)
                        <tr>
                          <td> {{ $loop->iteration }}</td>
                          <td><img class="img img-thumbnail" src="{{ asset('/galleryImages').'/'.$image->imageName }}"  /></td>
                          <td><a class="btn btn-link" href="{{ url('/imageDelete').'/'.$image->id }}" onclick="return confirm('Are you sure ?')">Delete</a></td>
                        </tr>
                      @endforeach
                    </tbody>
                </table>
              </div>
            @endif
          </div>
      </div>
    </div>
  </div>
@endsection
