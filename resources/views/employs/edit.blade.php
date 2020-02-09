@php
  $values = explode(",", $employ->employ_status);
@endphp
@extends('layouts.app')

@section('content')
    <div class="container">
      <h2>Edit A Employ</h2><br/>
      @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div><br/>
      @endif
      <form method="post" action="{{action('EmployController@update', $id)}}">
        {{csrf_field()}}
        <input name="_method" type="hidden" value="PATCH">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" value="{{$form->name}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="father_name">Father_Name:</label>
              <input type="text" class="form-control" name="father_name" value="{{$form->father_name}}">
            </div>
          </div>
          <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="phone_number">Phone Number:</label>
              <input type="text" class="form-control" name="phone_number" value="{{$form->phone_number}}">
            </div>
          </div>
          <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="address">Address:</label>
              <input type="text" class="form-control" name="address" value="{{$form->address}}">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4" style="margin-left:38px">

                 <lable>Acctive</lable>
                   <input type="radio" name="employ_status" value="Acctive"  @if($form->radio == 'Acitve') checked @endif>
                 <lable>None Active</lable>
                     <input type="radio" name="employ_status" value="port"  @if($form->radio == 'None Active') checked @endif>
            </div>
        </div>        
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success" style="margin-left:38px">Update</button>
          </div>
        </div>
      </form>
    </div>
@endsection