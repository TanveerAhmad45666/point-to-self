@extends('layouts.app')

@section('content')

<div class="card uper">
  <div class="card-header">
    View Post


                <a class="btn btn-primary" href="{{ route('supplier.index') }}"> Back</a>

            
  </div>
  <div class="card-body">
     <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Name:</strong>

                {{ $suppliers->name }}

            </div>

        </div>
         <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Phone Number</strong>

                {{ $suppliers->phonenumber }}

            </div>

        </div>
         <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>City:</strong>

                {{ $suppliers->city }}

            </div>

        </div>
       

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Address:</strong>

                {{ $suppliers->address }}

            </div>

        </div>

    </div>
    
  </div>
</div>
@endsection
