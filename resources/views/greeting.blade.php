@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
    <style>
        .greeting-card {
            background: white;
            padding: 40px;
            text-align: center;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
            margin-top: 40px;
        }

        .greeting-card .icon {
            font-size: 55px;
        }

        .greeting-card h1 {
            color: #1f2937;
        }

        .greeting-card p {
            color: #555;
            font-size: 18px;
        }

        .greeting-card a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background: #1f2937;
            color: white;
            text-decoration: none;
            border-radius: 8px;
        }

        .greeting-card a:hover {
            background: #374151;
        }
    </style>

    <div class="greeting-card">
        <div class="icon">👋</div>

        <h1>Hello {{ $name }}!</h1>

        <p>Welcome to the Offline Lost and Found app.</p>

        <a href="/">Back to Home</a>
    </div>
@endsection