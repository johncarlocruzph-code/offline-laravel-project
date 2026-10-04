@extends('layouts.app')

@section('title', 'About')

@section('content')
    <h1>About This Project</h1>
    <p>An offline Lost and Found app made with Laravel, Blade, and SQLite.</p>

    @php
        $group = 'Group 2';
        $members = [
            'John Carlo Cruz',
            'Dave Nino Edison Lato',
            'Francis Lawas',
            'Michelle Amor Calzada',
            'Joseph Tano',
            
            
        ];
    @endphp

    <h2>Team: {{ $group }}</h2>
    @foreach ($members as $member)
        <div class="card">{{ $member }}</div>
    @endforeach
@endsection