@extends('master')

@section('content')

<a href="{{ route('users.create') }}">Create User</a>
<hr>
<h2>Users</h2>

<ul>
    @foreach ($users as $user)
    <li>{{ $user->name }} | <a href="{{ route('users.edit', ['user' => $user->id]) }}">Edit</a> | <a href="">Delete</a></li>
    @endforeach
    <li></li>
</ul>
<a class="back" href="{{ route('home') }}">Back</a>


@endsection