@extends('layouts.app')

@section('content')
    <div class="container">
    <br/>
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Father Name</th>
        <th>Phone Number</th>
        <th>Address</th>
        <th>Status</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($employs as $employ)
      <tr>
        <td>{{$employ['id']}}</td>
        <td>{{$employ['name']}}</td>
        <td>{{$employ['father_name']}}</td>
        <td>{{$employ['phone_number']}}</td>
        <td>{{$employ['address']}}</td>
        <td>{{$employ['employ_status']}}</td>
        <td><a href="{{action('EmployController@edit', $employ['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('EmployController@destroy', $employ['id'])}}" method="post">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
@endsection