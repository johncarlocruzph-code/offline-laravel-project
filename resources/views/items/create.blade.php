@extends('layouts.app')

@section('title', 'Add Item')

@section('content')
    <h1>Add New Item</h1>

    <form method="POST" action="/items" class="card">
        @csrf

        <label>Name</label>
        <input type="text" name="name" required>

        <label>Description</label>
        <input type="text" name="description" required>

        <label>Location</label>
        <input type="text" name="location" required>

        <label>Status</label>
        <select name="status">
            <option value="lost">Lost</option>
            <option value="found">Found</option>
            <option value="claimed">Claimed</option>
        </select>

        <button type="submit">Save Item</button>
    </form>

    <p><a href="/items">Back to all items</a></p>
@endsection