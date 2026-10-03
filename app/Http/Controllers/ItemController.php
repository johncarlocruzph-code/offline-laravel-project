<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    // Sample data. Lesson 6 will replace this with the database.
    private function sampleItems()
    {
        return [
            1 => ['name' => 'Black Umbrella', 'description' => 'Folding umbrella with a wooden handle', 'location' => 'Library entrance', 'status' => 'lost'],
            2 => ['name' => 'Blue Water Bottle', 'description' => 'Steel bottle with a sticker on the side', 'location' => 'Canteen', 'status' => 'found'],
            3 => ['name' => 'Scientific Calculator', 'description' => 'Casio calculator with a cracked cover', 'location' => 'Room 204', 'status' => 'lost'],
        ];
    }

    public function index()
    {
        $items = $this->sampleItems();

        return view('items.index', ['items' => $items]);
    }

    public function show($id)
    {
        $items = $this->sampleItems();

        if (!isset($items[$id])) {
            return 'Item not found.';
        }

        return view('items.show', ['item' => $items[$id]]);
    }
}