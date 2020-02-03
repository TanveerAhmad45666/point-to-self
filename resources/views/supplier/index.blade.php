@extends('layouts.app')

@section('content')
<h1>pakista</h1>
  <div class="card uper">

  <div class="card-header">
    <a class="btn btn-primary" href="{{ route('supplier.create') }}"> Create New Post testing</a>
  </div>
 
  <div class="card-body">
    @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Name</td>
          <td>Phone Number</td>
          <td>city</td>
          <td>Address</td>
          <td colspan="3">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($supplier as $supplier)
        <tr>
            <td>{{$supplier->id}}</td>
            <td>{{$supplier->name}}</td>
            <td>{{$supplier->phonenumber}}</td>
            <td>{{$supplier->city}}</td>
            <td>{{$supplier->address}}</td>
            <td><a href="{{ route('supplier.edit',$suppliers->id)}}" class="btn btn-primary">Edit</a></td>
            <td><a class="btn btn-primary" href="{{ route('supplier.show',$suppliers->id) }}">Show</a></td>
            <td>
                <form action="{{ route('supplier.destroy', $suppliers->id)}}" method="post">
              
                 <input type="hidden" name="_method" value="DELETE">
                 {{csrf_field()}}
                   <!-- @csrf
                  @method('DELETE') -->
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  </div>
</div>
  
@endsection
