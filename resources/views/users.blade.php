@extends('master')

@section('content')
    <a href="{{route('users.create')}}">create</a>
    <hr/>
    <h2>Users</h2>
    <ul>
        @foreach ($users as $user)
            <li>{{$user->nome}} | <a href="{{route('users.edit', ['user' => $user->id])}}">Update</a> | <a href="{{route('users.show', ['user' => $user->id])}}">Show</a></li>
        @endforeach
    </ul>
@endsection