@extends('layout.main')

@section('content')

<div class="row align-items-center pt-5">
 <div class="row">
 <div class="col-md-6 offset-md-3 pt-5">
     <h2>User login</h2>
    <div class="container pt-4">
    <form>

  <div class="row mb-3">

    <label for="inputEmail3" class="col-sm-2 col-form-label col-form-label-lg">ID</label>
    <div class="col-sm-10">
      <input type="number" class="form-control form-control-lg" id="inputEmail3">
    </div>

  </div>



  <div class="row mb-3">

    <label for="inputPassword3" class="col-sm-2 col-form-label col-form-label-lg">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control form-control-lg" id="inputPassword3">
    </div>

    </div>

    <div class="row mb-3">
    <div class="form-group">

    <label for="exampleFormControlSelect1" class="col-sm-2 col-form-label col-form-label-lg">User type</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Student</option>
      <option>Faculty</option>
      <option>Admin</option>
     
    </select>
  </div>

  </div>
 

  <button type="submit" class="btn btn-primary">Sign in</button>

</form>

    </div>
   

 </div>
   
  </div>

@endsection