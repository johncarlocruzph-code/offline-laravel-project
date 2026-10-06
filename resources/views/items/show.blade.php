@extends('layouts.app')

@section('title', $item->name)

@section('content')
    <div class="page-header">
        <h1>{{ $item->name }}</h1>

        @if ($item->status === 'lost')
            <span class="badge lost">LOST</span>
        @elseif ($item->status === 'found')
            <span class="badge found">FOUND</span>
        @else
            <span class="badge claimed">CLAIMED</span>
        @endif
    </div>

    <div class="card">
        <p>{{ $item->description }}</p>
        <p>📍 Location: {{ $item->location }}</p>
        <p class="muted">Reported on: {{ $item->created_at }}</p>
    </div>

    <p><a class="btn" href="/items/{{ $item->id }}/edit">Change Status</a></p>

    <form method="POST" action="/items/{{ $item->id }}">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn-danger" onclick="return confirm('Delete this item?')">Delete Item</button>
    </form>

    <p><a href="/items">Back to all items</a></p>
@endsection