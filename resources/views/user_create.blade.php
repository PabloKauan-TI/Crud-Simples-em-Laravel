@extends('master')

@section('content')
    <h2>Edit</h2>

    @if (session()->has('message'))
        {{session()->get('message')}}
    @endif

    <form action="{{route('users.store')}}" method="POST">
        @csrf
        <input type="text" name="nome" placeholder="Nome">
        <input type="text" name="sobrenome" placeholder="Sobrenome">
        <input type="text" name="email" placeholder="email">
        <button type="submit">Cadastrar</button>
    </form>
@endsection