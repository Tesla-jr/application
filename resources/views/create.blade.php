@extends('layouts.app')

@section('content')

<div class="container">
<div class="card push-top">
  <div class="card-header">
    Add Member
  </div>

  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('staffs.store') }}">
          <div class="form-group">
              @csrf
              <label for="first_name">First Name</label>
              <input type="text" class="form-control" name="first_name"/>
          </div>
          <div class="form-group">
              <label for="last_name">Last Name</label>
              <input type="text" class="form-control" name="last_name"/>
          </div>
          <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email"/>
          </div>
          <div class="form-group">
              <label for="role">Role</label>
              <br>
              <select name="role" id="role">
              <option value="Administrator">Administrator</option>
              <option value="Doctor">Doctor</option>
              <option value="Nurse">Nurse</option>
              </select>
          </div>
          <button type="submit" class="btn btn-block btn-success">Create Staff</button>
      </form>
  </div>
</div>
</div>


@endsection
