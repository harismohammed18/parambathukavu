@extends('admin.layout.app')

@section('content')
  <div class="col-md-8">
    <div class="card">
      <div class="card-block">
        <div class="card-title">Available Galleries</div>
          <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if (isset($galleries) && $galleries->count() > 0)
              <form method="get" action="{{ url('/openGallery')}}">
                @csrf
                <div class="form-group">
                  <label>Gallery Name</label>
                  <select class="form-control" name="galleryName" required>
                    @foreach ($galleries as  $gallery)
                      <option value="{{ $gallery->id }}">{{ $gallery->name }}</option>
                    @endforeach
                  </select>
                </div>
                <button type="submit" class="btn btn-info">Open</button>
              </form>
            @endif
          </div>
      </div>
    </div>
  </div>
@endsection
