@extends('layouts.app')

@section('content')

</style>
<div class="card uper">
  <div class="card-header">
    Create Post
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif         
                                     <!-- "/posts" -->
      <form method="post" action="{{ route('posts.store') }}">
          <div class="form-group">
              @csrf
              <label for="title">Title:</label>
              <input type="text" class="form-control" name="title" id="title" />
              {{csrf_field()}}
          </div>
          <div class="form-group">
              <label for="price">Body:</label>
              <textarea name="body" id="body" class="form-control"></textarea>
              
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
      </form>
  </div>
</div>
@endsection