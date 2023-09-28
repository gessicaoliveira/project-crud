@extends('master')

@section('content')

<h2>Home</h2>
<a class="user-link" href="{{ route('users.index') }}">Users List</a>

@endsection