@extends('layouts.app')
@section('content')
    <h1>Welcome, {{ auth()->user()->name }}</h1>
    <!-- Add widgets and info for clients here -->
@endsection
