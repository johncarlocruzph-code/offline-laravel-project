@extends('layouts.app')

@section('title', $item['name'])

@section('content')
    <h1>{{ $item['name'] }}</h1>

    @if ($item['status'] === 'lost')
        <span class="badge lost">LOST</span>
    @else
        <span class="badge found">FOUND</span>
    @endif

    <div class="card">
        <p>{{ $item['description'] }}</p>
        <p>Location: {{ $item['location'] }}</p>
    </div>

    <p><a href="/items">Back to all items</a></p>
@endsection