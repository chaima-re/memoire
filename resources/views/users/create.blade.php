@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3>New User</h3>
      </div>
    </div>

    @if ($errors->any())
      <div class="alert alert-danger">
        <strong>Whoops! </strong> there where some problems with your input.<br>
        <ul>
          @foreach ($errors as $error)
            <li>{{$error}}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{route('users.store')}}" method="post">
      @csrf
      <div class="row">
        <div class="col-md-12">
          <strong>Name:</strong>
          <input type="text" name="namaSiswa" class="form-control" placeholder="Name">
        </div>
        <div class="col-md-12">
          <strong>Email:</strong>
          <input type="email"class="form-control" name="email" placeholder="email">
          
        </div>
        <div class="col-md-12">
          <strong>Password</strong>
          <input type="password" class="form-control"  placeholder="Password" name="pwd">
        </div>
      
      

        <div class="col-md-12">
          <a href="{{route('users.index')}}" class="btn btn-sm btn-success">Back</a>
          <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </div>
      </div>
    </form>


  </div>
@endsection
