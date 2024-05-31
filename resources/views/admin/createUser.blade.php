@extends('layouts.base')

@section('content')
<h2>Add New User</h2>
    <form action="{{ route('admin.users.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required class="form-control">
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required class="form-control">
        </div>
        <div class="form-group">
            <label for="utype">User Type:</label>
            <select id="utype" name="utype" class="form-control">
                <option value="USR">User</option>
                <option value="ADM">Admin</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Add User</button>
    </form>

    @endsection