<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    // Read: show all items
    public function index()
    {
        return view('items.index', [
            'items' => Item::all(),
            'filter' => 'all',
        ]);
    }

    // Read: show only the items of one status (lost, found or claimed)
    public function filter($status)
    {
        if (! in_array($status, Item::VALID_STATUSES, true)) {
            abort(404);
        }

        return view('items.index', [
            'items' => Item::all(),
            'filter' => $status,
        ]);
    }

    // Read: show one item
    public function show($id)
    {
        $item = Item::findOrFail($id);

        return view('items.show', ['item' => $item]);
    }

    // Create: show the form
    public function create()
    {
        return view('items.create');
    }

    // Create: save the new item
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'location' => ['required', 'string', 'max:255'],
            'status' => ['required', 'in:lost,found,claimed'],
        ]);

        Item::create($validated);

        return redirect('/items');
    }

    // Update: show the change status page
    public function edit($id)
    {
        $item = Item::findOrFail($id);

        return view('items.edit', ['item' => $item]);
    }

    // Update: save the new status
    public function update(Request $request, $id)
    {
        $item = Item::findOrFail($id);

        $request->validate([
            'status' => ['required', 'in:lost,found,claimed'],
        ]);

        $item->update(['status' => $request->input('status')]);

        return redirect('/items/' . $id);
    }

    // Delete: remove the item
    public function destroy($id)
    {
        $item = Item::findOrFail($id);
        $item->delete();

        return redirect('/items');
    }
}