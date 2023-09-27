@extends('master')

@section('content')

<h2>Home</h2>
<a class="user" href="{{ route('users.index') }}">Users</a>

@endsection