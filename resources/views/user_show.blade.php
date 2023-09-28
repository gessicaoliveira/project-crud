@extends('master')

@section('content')

<h2>User</h2>

<ul class="user-list">
    <li>Name: {{ $user->name }}</li>
    <li>Mail: {{ $user->email }}</li>
</ul>
<form action="{{ route('users.destroy', ['user' => $user->id]) }}" method="post">
    @csrf
    <input type="hidden" name="_method" value="DELETE">
    <button class="delete-btn" type="submit">Delete User</button>
</form>
<a class="back-link" href="{{ route('users.index') }}">User List</a>

@endsection