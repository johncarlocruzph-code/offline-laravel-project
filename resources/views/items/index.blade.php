@extends('layouts.app')

@section('title', 'All Items')

@section('content')
    @php
        $lostCount = 0;
        $foundCount = 0;
        $claimedCount = 0;

        foreach ($items as $item) {
            $status = $item->status ?? 'claimed';

            match ($status) {
                'lost' => $lostCount++,
                'found' => $foundCount++,
                'claimed' => $claimedCount++,
                default => $claimedCount++,
            };
        }

        $totalCount = $lostCount + $foundCount + $claimedCount;
        $shownCount = match ($filter) {
            'all' => $totalCount,
            'lost' => $lostCount,
            'found' => $foundCount,
            'claimed' => $claimedCount,
            default => 0,
        };
    @endphp

    <div class="page-header">
        <h1>
            @if ($filter === 'all')
                Lost and Found Items
            @else
                {{ ucfirst($filter) }} Items
            @endif
        </h1>
        <a class="btn" href="/items/create">+ Add New Item</a>
    </div>

    <p class="muted">
        Showing {{ $shownCount }} of {{ $totalCount }} items
        @if ($filter !== 'all')
            &middot; <a href="/items">Show all</a>
        @endif
    </p>

    <div class="stats">
        <a class="stat @if ($filter === 'lost') active @endif" href="/items/status/lost">
            <div class="number">{{ $lostCount }}</div>
            <span class="badge lost">LOST</span>
        </a>
        <a class="stat @if ($filter === 'found') active @endif" href="/items/status/found">
            <div class="number">{{ $foundCount }}</div>
            <span class="badge found">FOUND</span>
        </a>
        <a class="stat @if ($filter === 'claimed') active @endif" href="/items/status/claimed">
            <div class="number">{{ $claimedCount }}</div>
            <span class="badge claimed">CLAIMED</span>
        </a>
    </div>

    @if ($shownCount === 0)
        <div class="card">
            No items here yet. <a href="/items/create">Report an item</a>
        </div>
    @else
        <div class="grid">
            @foreach ($items as $item)
                @php
                    $status = $item->status ?? 'claimed';
                    $badgeClass = in_array($status, ['lost', 'found', 'claimed'], true) ? $status : 'claimed';
                @endphp

                @if ($status !== 'archived' && ($filter === 'all' || $status === $filter))
                    <div class="item-card">
                        <span class="badge {{ $badgeClass }}">{{ strtoupper($badgeClass) }}</span>

                        <h3>{{ $item->name }}</h3>
                        <p>{{ $item->description }}</p>
                        <p>📍 {{ $item->location }}</p>
                        <p><a class="btn" href="/items/{{ $item->id }}">View details</a></p>
                    </div>
                @endif
            @endforeach
        </div>
    @endif
@endsection