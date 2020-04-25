@extends('layouts.main')

@section('content')
<div class="container">

@if($errors->any())

@foreach($errors->all() as $error)
<div class="alert alert-danger" role="alert">
  {{$error}}
</div>
@endforeach   

@endif
<h1>create page</h1>



<form action="{{route('store')}}" method="POST">
@csrf
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">First Name</label>
      <input type="text" class="form-control" id="inputEmail4" name="firstname" placeholder="First Name">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Last Name</label>
      <input type="text" class="form-control" id="inputPassword4" name="lastname" placeholder="Last Name">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Age</label>
      <input type="text" class="form-control" id="inputPassword4" name="age" placeholder="Age">
    </div>
  </div>


  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Phone #</label>
      <input type="text" class="form-control" id="inputEmail4" name="phone" placeholder="Phone #">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Designation</label>
      <input type="text" class="form-control" id="inputPassword4" name="designation" placeholder="Designation">
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" name="address" placeholder="1234 Main St">
  </div>
  

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" name="city" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" name="state" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" name="zip" id="inputZip">
    </div>
  </div>
  <div class="form-group">
    
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@endsection