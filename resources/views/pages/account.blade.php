@extends('layouts.app')
@section('content')
    <form action="{{route('logout')}}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button type="submit">Logout</button>
    </form>
@endsection

