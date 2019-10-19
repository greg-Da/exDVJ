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
      <td><a href="" class="btn btn-danger btn-sm" type="button" >Delete</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection