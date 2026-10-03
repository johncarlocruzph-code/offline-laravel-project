@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <style>
        .home-card {
            background: white;
            padding: 40px;
            text-align: center;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
            margin-top: 40px;
        }

        .home-card .icon {
            font-size: 55px;
        }

        .home-card h1 {
            color: #1f2937;
        }

        .home-card .tagline {
            color: #555;
            font-size: 18px;
        }

        .home-card .info {
            margin-top: 25px;
            color: #777;
        }

        .home-card .step {
            background: #f3f4f6;
            border-radius: 8px;
            padding: 10px 14px;
            margin: 8px 0;
            color: #374151;
        }

        .home-card .btn {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background: #1f2937;
            color: white;
            text-decoration: none;
            border-radius: 8px;
        }

        .home-card .btn:hover {
            background: #374151;
        }
    </style>

    @php
        $hour = (int) date('G');
        $steps = [
            'Open the items list.',
            'Check if your lost item is already there.',
            'Open the item to see where it was found.',
        ];
    @endphp

    <div class="home-card">
        <div class="icon">🔎</div>

        <h1>{{ $appName }}</h1>

        <p class="tagline">{!! $tagline !!}</p>

        @if ($hour < 12)
            <p>Good morning!</p>
        @elseif ($hour < 18)
            <p>Good afternoon!</p>
        @else
            <p>Good evening!</p>
        @endif

        <p class="info">Today is {{ date('F j, Y') }}.</p>

        <h3>How it works</h3>
        @for ($i = 0; $i < 3; $i++)
            <div class="step">Step {{ $i + 1 }}: {{ $steps[$i] }}</div>
        @endfor

        <a class="btn" href="/user/Michelle">View Greeting</a>
    </div>
@endsection