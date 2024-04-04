<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Admin;
use Illuminate\Contracts\Session\Session;

class passwordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('password.password');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        // echo "1";

        $validator = Validator::make($request->all(), [
            'o_password' => 'required|string|max:100',
            'n_password' => 'required|string|max:100',
            'c_password' => 'required|string|max:100',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $user = Admin::find(2);

        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        $user->password = $request->input('c_password');
        $user->save();

        return response()->json(['message' => 'User updated successfully'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
