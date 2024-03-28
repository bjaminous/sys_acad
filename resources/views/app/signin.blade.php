@extends('layouts.app')

@section('contenu')
    <form action="{{route('login')}}" class="login-form" method="post">
        @csrf
        <h2>Sign in</h2>
        <input type="text" placeholder="Username">
        <input type="password"placeholder="Password">

        <br><button type="submit">log in</button>
    </form>
@endsection
