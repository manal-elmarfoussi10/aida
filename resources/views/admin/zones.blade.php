@extends('layouts.app')

@section('title', 'Zones')

@section('content')
<div class="mb-6 flex justify-between items-center">
    <h1 class="text-2xl font-bold">Zones List</h1>
    <a href="#" class="bg-green-500 text-black px-4 py-2 rounded hover:bg-green-400">Add New Zone</a>
</div>

{{-- Barre de recherche blanche --}}
<div class="relative w-1/3 mb-4">
    <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-500">
        <i data-lucide="search" class="w-4 h-4"></i>
    </span>
    <input type="text" placeholder="Search"
           class="h-10 text-sm pl-10 pr-4 py-2 w-full bg-white text-black border border-gray-300 rounded placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-green-400">
</div>

<div class="bg-[#1f1f1f] rounded shadow overflow-x-auto">
    <table class="w-full text-sm text-left text-white">
        <thead class="bg-white text-black">
            <tr>
                <th class="px-4 py-3">Zone Name</th>
                <th class="px-4 py-3">Zone Type</th>
                <th class="px-4 py-3">Status</th>
                <th class="px-4 py-3">Occupancy</th>
                <th class="px-4 py-3">Temperature/Humidity</th>
                <th class="px-4 py-3">Energy Consumption</th>
                <th class="px-4 py-3 text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($zones as $zone)
            <tr class="border-b border-gray-700 hover:bg-[#2a2a2a]">
                <td class="px-4 py-3">{{ $zone['name'] }}</td>
                <td class="px-4 py-3">{{ $zone['type'] }}</td>
                <td class="px-4 py-3">
                    @if($zone['status'] === 'on')
                        <span class="bg-green-500 text-xs px-2 py-1 rounded-full">ON</span>
                    @else
                        <span class="bg-red-500 text-xs px-2 py-1 rounded-full">OFF</span>
                    @endif
                </td>
                <td class="px-4 py-3">{{ $zone['occupancy'] }}</td>
                <td class="px-4 py-3">{{ $zone['temperature'] }}</td>
                <td class="px-4 py-3">{{ $zone['energy'] }}</td>
                <td class="px-4 py-3 text-center flex justify-center gap-3">
                    <a href="#" class="text-green-400 hover:text-green-600">
                        <i data-lucide="pencil" class="w-4 h-4"></i>
                    </a>
                    <a href="#" class="text-red-500 hover:text-red-700">
                        <i data-lucide="trash-2" class="w-4 h-4"></i>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
