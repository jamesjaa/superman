<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Sms;

class smsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('sms.sms');
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
            'provider' => 'required|string|max:100',
            'smskey' => 'required|string|max:100',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $sms = Sms::get();

        $sms = Sms::create([
            'ag_id' => 1,
            'sms_provider' => $request->input('provider'),
            'sms_password' => password_hash($request->input('smskey'), PASSWORD_DEFAULT),
            'sms_endpoint' => "https://portal.sms2pro.com/sms-api/message-sms/send",
            'sms_sender_name' => "SMSOTP"
        ]);

        return response()->json($sms, 201);
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
