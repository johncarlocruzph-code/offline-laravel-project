@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <style>
        .hero {
            background: #2563eb;
            color: #ffffff;
            padding: 50px 30px;
            border-radius: 15px;
            text-align: center;
            margin-top: 30px;
        }

        .hero h1 {
            color: #ffffff;
            margin: 0 0 10px;
            font-size: 38px;
        }

        .hero .tagline {
            color: #eef4ff;
            font-size: 20px;
            margin-bottom: 25px;
        }

        .hero .btn {
            margin: 5px;
            background: #ffffff;
            color: #1e3a8a;
            font-weight: bold;
        }

        .hero .btn:hover {
            background: #e5edff;
        }

        .hero .btn-outline {
            background: transparent;
            color: #ffffff;
            border: 2px solid #ffffff;
        }

        .hero .btn-outline:hover {
            background: rgba(255, 255, 255, 0.2);
        }

        .features {
            display: flex;
            gap: 12px;
        }

        .feature {
            flex: 1;
            background: #ffffff;
            border-radius: 12px;
            padding: 18px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12);
        }

        .feature h3 {
            margin-top: 0;
        }

        @media (max-width: 600px) {
            .features {
                flex-direction: column;
            }
        }
    </style>

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

        $features = [
            ['title' => 'Report an item', 'text' => 'Add a lost or found item with its location.'],
            ['title' => 'Browse the list', 'text' => 'Check if your lost item was already found.'],
            ['title' => 'Update the status', 'text' => 'Mark an item as found or claimed.'],
        ];
    @endphp

    <div class="hero">
        <h1>{{ $appName }}</h1>
        <p class="tagline">{!! $tagline !!}</p>
        <a class="btn" href="/items">View Items</a>
        <a class="btn btn-outline" href="/items/create">Report an Item</a>
    </div>

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

    <h2>What you can do</h2>
    <div class="features">
        @foreach ($features as $feature)
            <div class="feature">
                <h3>{{ $feature['title'] }}</h3>
                <p>{{ $feature['text'] }}</p>
            </div>
        @endforeach
    </div>
@endsection