<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CategoryController extends Controller
{
    public function index()
    {
        $categories = DB::table('categories')->get();
        return response()->json($categories);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255'
        ]);

        $id = DB::table('categories')->insertGetId([
            'name' => $request->name,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return response()->json([
            'message' => 'Kategória bola vytvorená',
            'id' => $id
        ], 201);
    }

    public function show($id)
    {
        $category = DB::table('categories')->where('id', $id)->first();

        if (!$category) {
            return response()->json(['message' => 'Kategória neexistuje'], 404);
        }

        return response()->json($category);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255'
        ]);

        $updated = DB::table('categories')
            ->where('id', $id)
            ->update([
                'name' => $request->name,
                'updated_at' => now(),
            ]);

        if (!$updated) {
            return response()->json(['message' => 'Kategória sa nenašla alebo nedošlo k zmene'], 404);
        }

        return response()->json(['message' => 'Kategória bola upravená']);
    }

    public function destroy($id)
    {
        $deleted = DB::table('categories')->where('id', $id)->delete();

        if (!$deleted) {
            return response()->json(['message' => 'Kategória neexistuje'], 404);
        }

        return response()->json(['message' => 'Kategória bola vymazaná']);
    }
}
