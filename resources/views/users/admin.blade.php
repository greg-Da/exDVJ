@section('title', 'Admin')
@extends('layout')

@section('content')

<h1 class="h1users">Users</h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Tool</th>
    </tr>
  </thead>
  <tbody>
  	@foreach ($users as $user)
    <tr>
      <th scope="row">{{$user -> id}}</th>
      <td>{{$user -> username}}</td>
      <td>{{$user -> email}}</td>
      <td>
        <form method="POST" action="{{Route('user.destroy',['id' => $user->id])}}">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-sm btn-danger">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection