@extends('layouts.app')
@section('content')
<div class="card uper">
  <div class="card-header">
    Edit Post
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
    <form method="post" action="{{ route('supplier.update', $suppliers->id)}}">
      

      <div class="form-group">
        <label for="title">naem:</label>
        <input type="text" class="form-control" name="name" id="name" value={{ $suppliers->name }}>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Phone Number</label>
        <input type="text" name="phonenumber"  class="form-control" id="phonenumber" value={{ $suppliers->phonenumber}}>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">city</label>
        <input type="text" name="city" class="form-control" id="exampleInputPassword1" value={{ $suppliers->city}}>
      </div>


      <div class="form-group">
        <label for="price">Address:</label>
        <textarea name="address" id="post_body" class="form-control"value={{ $suppliers->address}}></textarea>
      </div>

      <button type="submit" class="btn btn-primary">Update</button>
    </form>
  </div>
  
@endsection

