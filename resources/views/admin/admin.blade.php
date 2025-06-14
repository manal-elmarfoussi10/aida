@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto bg-gray-800 p-8 rounded-lg shadow-lg">
    <h1 class="text-3xl font-bold mb-4 text-green-400">Admin Dashboard</h1>
    <p>Welcome, {{ Auth::user()->name }}!</p>

    {{-- Add your admin widgets here --}}
    <div class="mt-8">
        <a href="{{ url('/dashboard') }}" class="text-green-300 underline">Go to Client Dashboard</a>
    </div>
</div>
@endsection