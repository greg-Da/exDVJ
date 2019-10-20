@extends('layout')

@section('content')

<h1>Users</h1>

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
      <th scope="row">1</th>
      <td>{{$user -> name}}</td>
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