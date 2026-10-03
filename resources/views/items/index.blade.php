@extends('layouts.app')

@section('title', 'All Items')

@section('content')
    <h1>Lost and Found Items</h1>

    @foreach ($items as $id => $item)
        <div class="card">
            <h3>
                {{ $item['name'] }}
                @if ($item['status'] === 'lost')
                    <span class="badge lost">LOST</span>
                @else
                    <span class="badge found">FOUND</span>
                @endif
            </h3>
            <p>{{ $item['description'] }}</p>
            <p>Location: {{ $item['location'] }}</p>
            <a href="/items/{{ $id }}">View details</a>
        </div>
    @endforeach
@endsection