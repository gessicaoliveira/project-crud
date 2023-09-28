@extends('master')

@section('content')


<h2>Edit</h2>

@if (session()->has('message'))
    {{ session()->get('message') }}
@endif

<form action="{{ route('users.update', ['user' => $user->id]) }}" method="post">
    @csrf
    <div class="user-edit">
        <input type="hidden" name="_method" value="PUT">
        <input type="text" name="name" value="{{ $user->name }}">
        <input type="text" name="email" value="{{ $user->email }}">
        <input type="text" name="password" value="{{ $user->password }}">
        <button type="submit">Update</button>
    </div>
</form>
<a class="back-link" href="{{ route('users.index') }}">User List</a>


@endsection