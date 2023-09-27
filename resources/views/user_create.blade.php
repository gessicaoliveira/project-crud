@extends('master')

@section('content')


<h2>Create User</h2>

@if (session()->has('message'))
    {{ session()->get('message') }}
@endif

<form action="{{ route('users.store') }}" method="post">
    @csrf
    <div class="edit-user">
        <input type="text" name="name" placeholder="Your name">
        <input type="text" name="email" placeholder="Your email">
        <input type="text" name="password" placeholder="Your password">
        <button type="submit">Save new user</button>
    </div>
</form>
<a class="back" href="{{ route('users.index') }}">Back</a>


@endsection