@extends('layouts.app')

@section('title', $item->name)

@section('content')
    <h1>{{ $item->name }}</h1>

    @if ($item->status === 'lost')
        <span class="badge lost">LOST</span>
    @elseif ($item->status === 'found')
        <span class="badge found">FOUND</span>
    @else
        <span class="badge claimed">CLAIMED</span>
    @endif

    <div class="card">
        <p>{{ $item->description }}</p>
        <p>Location: {{ $item->location }}</p>
        <p>Reported on: {{ $item->created_at }}</p>
    </div>

    <p><a href="/items">Back to all items</a></p>
@endsection