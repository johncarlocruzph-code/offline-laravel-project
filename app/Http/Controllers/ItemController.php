<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    // Read: show all items
    public function index()
    {
        $items = Item::all();
        $firstItem = Item::first();

        return view('items.index', [
            'items' => $items,
            'firstItem' => $firstItem,
        ]);
    }

    // Read: show one item
    public function show($id)
    {
        $item = Item::find($id);

        if ($item === null) {
            return 'Item not found.';
        }

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
        Item::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'location' => $request->input('location'),
            'status' => $request->input('status'),
        ]);

        return redirect('/items');
    }

    // Update: show the change status page
    public function edit($id)
    {
        $item = Item::find($id);

        if ($item === null) {
            return 'Item not found.';
        }

        return view('items.edit', ['item' => $item]);
    }

    // Update: save the new status
    public function update(Request $request, $id)
    {
        $item = Item::find($id);

        if ($item === null) {
            return 'Item not found.';
        }

        $item->update(['status' => $request->input('status')]);

        return redirect('/items/' . $id);
    }

    // Delete: remove the item
    public function destroy($id)
    {
        $item = Item::find($id);

        if ($item !== null) {
            $item->delete();
        }

        return redirect('/items');
    }
}