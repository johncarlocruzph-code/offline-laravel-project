@extends('layouts.app')

@section('title', 'About')

@section('content')
    @php
        $steps = [
            'Open the items list.',
            'Check if your lost item is already there.',
            'Open the item to see where it was found.',
        ];

        $technologies = ['Laravel 13', 'Blade templates', 'SQLite database', 'MVC structure'];

        $group = 'Group 2';
        $members = [
            ['name' => 'Francis Lawas', 'role' => 'Routes, Item model and migration'],
            ['name' => 'Michelle Amor Calzada', 'role' => 'Home and item pages'],
            ['name' => 'Joseph Tano', 'role' => 'Layout and partials'],
            ['name' => 'Dave Nino Edison Lato', 'role' => 'Controller, About page and design'],
            ['name' => 'John Carlo Cruz', 'role' => 'Setup, Blade directives and create form'],
        ];
    @endphp

    <div class="page-header">
        <h1>About This Project</h1>
    </div>

    <div class="card">
        <p>Offline Lost and Found helps people report, find and claim lost items. It works without internet because it uses a local SQLite database.</p>
    </div>

    <h2>How it works</h2>
    <div class="grid">
        @for ($i = 0; $i < 3; $i++)
            <div class="item-card">
                <span class="badge claimed">STEP {{ $i + 1 }}</span>
                <p>{{ $steps[$i] }}</p>
            </div>
        @endfor
    </div>

    <h2>Technologies</h2>
    <p>
        @foreach ($technologies as $technology)
            <span class="badge found">{{ $technology }}</span>
        @endforeach
    </p>

    <h2>Team: {{ $group }}</h2>
    <div class="grid">
        @foreach ($members as $member)
            <div class="item-card">
                <h3>{{ $member['name'] }}</h3>
                <p>{{ $member['role'] }}</p>
            </div>
        @endforeach
    </div>
@endsection