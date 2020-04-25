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
<h1>Edit Page</h1>



<form action="{{route('update', $job->id)}}" method="POST">
@csrf
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">First Name</label>
      <input type="text" class="form-control" id="inputEmail4" name="firstname" value="{{$job->first_name}}" placeholder="First Name">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Last Name</label>
      <input type="text" class="form-control" id="inputPassword4" name="lastname" value="{{$job->last_name}}" placeholder="Last Name">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" name="email" value="{{$job->email}}" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Age</label>
      <input type="text" class="form-control" id="inputPassword4" name="age" value="{{$job->age}}" placeholder="Age">
    </div>
  </div>


  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Phone #</label>
      <input type="text" class="form-control" id="inputEmail4" name="phone" value="{{$job->phone}}" placeholder="Phone #">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Designation</label>
      <input type="text" class="form-control" id="inputPassword4" name="designation" value="{{$job->designation}}" placeholder="Designation">
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" name="address" value="{{$job->address}}" placeholder="1234 Main St">
  </div>
  

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" name="city" value="{{$job->city}}" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" name="state" value="{{$job->state}}" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" value="{{$job->zip}}" name="zip" id="inputZip">
    </div>
  </div>
  <div class="form-group">
    
  <button type="submit" class="btn btn-primary">Update</button>
</form>
</div>

@endsection