@extends('layouts.app')

@section('title', 'All Items')

@section('content')
    @php
        $lostCount = 0;
        $foundCount = 0;
        $claimedCount = 0;

        foreach ($items as $item) {
            if ($item->status === 'lost') {
                $lostCount++;
            } elseif ($item->status === 'found') {
                $foundCount++;
            } else {
                $claimedCount++;
            }
        }
    @endphp

    <div class="page-header">
        <h1>Lost and Found Items</h1>
        <a class="btn" href="/items/create">+ Add New Item</a>
    </div>

    <p class="muted">Total items: {{ $items->count() }}</p>

    <div class="stats">
        <div class="stat">
            <div class="number">{{ $lostCount }}</div>
            <span class="badge lost">LOST</span>
        </div>
        <div class="stat">
            <div class="number">{{ $foundCount }}</div>
            <span class="badge found">FOUND</span>
        </div>
        <div class="stat">
            <div class="number">{{ $claimedCount }}</div>
            <span class="badge claimed">CLAIMED</span>
        </div>
    </div>

    @if ($items->isEmpty())
        <div class="card">
            No items reported yet. <a href="/items/create">Report the first item</a>
        </div>
    @else
        <div class="grid">
            @foreach ($items as $item)
                <div class="item-card">
                    @if ($item->status === 'lost')
                        <span class="badge lost">LOST</span>
                    @elseif ($item->status === 'found')
                        <span class="badge found">FOUND</span>
                    @else
                        <span class="badge claimed">CLAIMED</span>
                    @endif

                    <h3>{{ $item->name }}</h3>
                    <p>{{ $item->description }}</p>
                    <p>📍 {{ $item->location }}</p>
                    <p><a class="btn" href="/items/{{ $item->id }}">View details</a></p>
                </div>
            @endforeach
        </div>
    @endif
@endsection