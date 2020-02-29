@extends('layouts.app')

@section('content')

  <table class="table">
    <thead>
        <tr class="table-warning">
          <td>ID</td>
          <td>first name</td>
          <td>last name</td>
          <td>email</td>
          <td>role</td>
        </tr>
    </thead>
    <tbody>
        @foreach($staff as $staffs)
        <tr>
            <td>{{$staffs->id}}</td>
            <td>{{$staffs->first_name}}</td>
            <td>{{$staffs->last_name}}</td>
            <td>{{$staffs->email}}</td>
            <td>{{$staffs->role}}</td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection