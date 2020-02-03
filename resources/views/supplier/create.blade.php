@extends('layouts.app')

@section('content')
<div class="container">
  <h2>Create A Form</h2><br/>
  @if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div><br />
  @endif
  @if (\Session::has('success'))
  <div class="alert alert-success">
    <p>{{ \Session::get('success') }}</p>
  </div><br />
  @endif
  <form method="post" action="{{ route('supplier.store') }}">

    <div class=" box-body">
    </div>
  </form>
</div>



@endsection