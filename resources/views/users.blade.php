@extends('master')

@section('content')

<a class="create-link" href="{{ route('users.create') }}">Create User</a>
<hr>
<h2>Users</h2>

<ul class="user-list">
    @foreach ($users as $user)
    <li>{{ $user->name }} | <a href="{{ route('users.edit', ['user' => $user->id]) }}">Edit</a> | <a href="{{ route('users.show', ['user' => $user->id]) }}">Show</a></li>
    @endforeach
</ul>
<a class="back-link" href="{{ route('home') }}">Home</a>


@endsection