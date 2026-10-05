@extends('layouts.app')

@section('title', 'All Items')

@section('content')
    <h1>Lost and Found Items</h1>
    <p>Total items: {{ $items->count() }}</p>

    @if ($firstItem)
        <p>First reported item: <strong>{{ $firstItem->name }}</strong></p>
    @endif

    @if ($items->isEmpty())
        <div class="card">No items reported yet.</div>
    @else
        @foreach ($items as $item)
            <div class="card">
                <h3>
                    {{ $item->name }}
                    @if ($item->status === 'lost')
                        <span class="badge lost">LOST</span>
                    @elseif ($item->status === 'found')
                        <span class="badge found">FOUND</span>
                    @else
                        <span class="badge claimed">CLAIMED</span>
                    @endif
                </h3>
                <p>{{ $item->description }}</p>
                <p>Location: {{ $item->location }}</p>
                <a href="/items/{{ $item->id }}">View details</a>
            </div>
        @endforeach
    @endif
@endsection