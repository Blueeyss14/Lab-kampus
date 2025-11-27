<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    protected function itemsFromSession()
    {
        return session()->get('items', []);
    }

    protected function saveItemsToSession(array $items)
    {
        session()->put('items', $items);
    }

    protected function nextId()
    {
        $next = session()->get('next_id', 1);
        session()->put('next_id', $next + 1);
        return $next;
    }

    public function index()
    {
        $items = $this->itemsFromSession();
        return view('items.index', compact('items'));
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required|string|max:255']);

        $items = $this->itemsFromSession();
        $id = $this->nextId();
        $items[$id] = ['id' => $id, 'name' => $request->input('name')];
        $this->saveItemsToSession($items);

        return redirect()->route('items.index')->with('success', 'Item ditambahkan.');
    }

    public function edit($id)
    {
        $items = $this->itemsFromSession();
        if (!isset($items[$id])) {
            return redirect()->route('items.index')->with('error', 'Item tidak ditemukan.');
        }
        $item = $items[$id];
        return view('items.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $request->validate(['name' => 'required|string|max:255']);

        $items = $this->itemsFromSession();
        if (!isset($items[$id])) {
            return redirect()->route('items.index')->with('error', 'Item tidak ditemukan.');
        }
        $items[$id]['name'] = $request->input('name');
        $this->saveItemsToSession($items);

        return redirect()->route('items.index')->with('success', 'Item diperbarui.');
    }

    public function destroy($id)
    {
        $items = $this->itemsFromSession();
        if (isset($items[$id])) {
            unset($items[$id]);
            $this->saveItemsToSession($items);
            return redirect()->route('items.index')->with('success', 'Item dihapus.');
        }
        return redirect()->route('items.index')->with('error', 'Item tidak ditemukan.');
    }
}
