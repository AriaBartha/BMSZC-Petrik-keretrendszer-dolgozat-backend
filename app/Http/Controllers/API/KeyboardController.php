<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreKeyboardRequest;
use App\Models\Keyboard;
use Illuminate\Http\Request;

class KeyboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $keyboards = Keyboard::all();
        return response()->json($keyboards, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKeyboardRequest $request)
    {
        $keyboard = new Keyboard();
        $keyboard->fill($request->all());
        $keyboard->save();
        return response()->json($keyboard, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $keyboard = Keyboard::find($id);
        if (is_null($keyboard)) {
            return response()->json(["message" => "Keyboard not found with id: $id"], 404);
        }
        return $keyboard;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
