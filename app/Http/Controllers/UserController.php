<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        // var_dump($users);

        return view('user.users', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'pre_name' => 'required|string|max:100',
            'f_name' => 'required|string|max:100',
            'l_name' => 'required|string|max:100',
            'phone_number' => 'required|string|max:100',
            'gender' => 'required|string|max:100',
            'bank_type' => 'required|integer',
            'bank_account_number' => 'required|string|max:100',
            'birthday' => 'required|date',
            'line_id' => 'required|string|max:100',
            // 'date_create' => 'required|date',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $user = User::create($request->all());

        return response()->json($user, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $users = User::where('id', $id)->first();
        return response()->json($users);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            // กำหนด rules การ validate ข้อมูลที่ต้องการอัปเดต
            'f_name' => 'required|string|max:100',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $user = User::find($id);
        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        // อัปเดตข้อมูลผู้ใช้
        $user->f_name = $request->input('f_name');
        // อัปเดต fields อื่นๆ ตามที่ต้องการ
        $user->save();

        return response()->json(['message' => 'User updated successfully'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $resource = User::find($id);

        if (!$resource) {
            return response()->json(['message' => 'Resource not found'], 404);
        }

        $resource->delete();

        return response()->json(['message' => 'Resource deleted successfully'], 200);
    }
}
