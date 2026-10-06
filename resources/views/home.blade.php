@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <style>
        .hero {
            background: #1f3a5f;
            color: #fff;
            padding: 50px 30px;
            border-radius: 15px;
            text-align: center;
            margin-top: 30px;
        }

        .hero h1 {
            margin: 0 0 10px;
            font-size: 36px;
        }

        .hero .tagline {
            font-size: 18px;
            margin-bottom: 25px;
        }

        .hero .btn {
            margin: 5px;
            background: #fff;
            color: #1f3a5f;
            font-weight: bold;
        }

        .hero .btn-outline {
            background: transparent;
            color: #fff;
            border: 2px solid #fff;
        }

        .stats {
            display: flex;
            gap: 12px;
            margin: 25px 0;
        }

        .stat {
            flex: 1;
            background: #fff;
            border-radius: 12px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.15);
        }

        .stat .number {
            font-size: 34px;
            font-weight: bold;
            margin-bottom: 8px;
        }

        .features {
            display: flex;
            gap: 12px;
        }

        .feature {
            flex: 1;
            background: #fff;
            border-radius: 12px;
            padding: 18px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.15);
        }
    </style>

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