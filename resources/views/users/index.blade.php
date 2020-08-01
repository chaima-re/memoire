@extends('layouts.app')
@section('content')

  <div class="container">
    <div class="row">
      <div class="col-md-10">
        <h3>List Users</h3>
      </div>
      <div class="col-sm-2">
        <a class="btn btn-sm btn-success" href="{{ route('users.create') }}">Create New User</a>
      </div>
    </div>

    @if ($message = Session::get('success'))
      <div class="alert alert-success">
        <p>{{$message}}</p>
      </div>
    @endif

    <table class="table table-hover table-sm">
      <tr>
        
        <th width = "300px">Name</th>

        <th>Email</th>
        <th>password</th>
        <th width = "180px">Action</th>
      </tr>

      @foreach ($users as $user)
        <tr>
          
          <td>{{$user->name}}</td>
           <td>{{$user->email}}</td>
           <td>{{$user->password}}</td>
          
          <td>
            <form action="{{ route('users.destroy', $user->id) }}" method="post">
              <a class="btn btn-sm btn-success" href="{{route('users.show',$user->id)}}">Show</a>
              <a class="btn btn-sm btn-warning" href="{{route('users.edit',$user->id)}}">Edit</a>
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-sm btn-danger">Delete</button>
            </form>
          </td>
        </tr>
      @endforeach
    </table>

    <div class="pagination justify-content-center">
        {{$users->links()}}
    </div>
  </div>
@endsection

