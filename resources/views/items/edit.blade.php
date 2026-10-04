@extends('layouts.app')

@section('title', 'Change Status')

@section('content')
    <h1>Change Status</h1>

    <p>Item: <strong>{{ $item->name }}</strong></p>
    <p>Current status: {{ $item->status }}</p>

    <form method="POST" action="/items/{{ $item->id }}">
        @csrf
        @method('PUT')

        <select name="status">
            <option value="lost">Lost</option>
            <option value="found">Found</option>
            <option value="claimed">Claimed</option>
        </select>

        <button type="submit">Save Status</button>
    </form>

    <p><a href="/items/{{ $item->id }}">Cancel</a></p>
@endsection