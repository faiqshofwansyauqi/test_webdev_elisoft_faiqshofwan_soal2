<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Table;
use Illuminate\Support\Str;

class TableController extends Controller
{
    public function index()
    {
        $tables = Table::latest()->get();
        return view('tables.index', compact('tables'));
    }

    public function create()
    {
        return view('tables.create');
    }

    public function store(Request $request)
    {
        $table = Table::create([
            'title' => $request->input('title'),
            'slug' => Str::slug($request->input('title')),
            'content' => $request->input('content')
        ]);

        return redirect()->route('tables.index');
    }

    public function edit(Table $table)
    {
        return view('tables.edit', compact('table'));
    }

    public function update(Request $request, Table $table)
    {
        $table->update([
            'title' => $request->input('title'),
            'slug' => Str::slug($request->input('title')),
            'content' => $request->input('content')
        ]);

        return redirect()->route('tables.index');
    }

    public function destroy(Table $table)
    {
        $table->delete();

        return redirect()->route('tables.index');
    }
}
