<?php

namespace App\Http\Controllers;

use App\Models\FormRequestBrochure;
use Illuminate\Http\Request;

class BrochureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        // dd($request->all());
        $data = new FormRequestBrochure;
        $data->name = $request->first_name . " " . $request->last_name;
        $data->company_email = $request->company_email;
        $data->phone_number = $request->phone_number;
        if ($data->save()) {
            return redirect()->route("home")->with([
                "message" => "Terima kasih atas permintaan brosur Anda. Kami akan segera memeriksa kelayakan permohonan Anda. Mohon untuk memeriksa email Anda secara berkala untuk informasi lebih lanjut."
            ]);
        }
        return redirect()->back()->with([
            "message" => "Mohon maaf, terjadi kesalahan server!"
        ]);
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
