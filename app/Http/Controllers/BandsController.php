<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBandsRequest;
use App\Http\Requests\UpdateBandsRequest;
use App\Models\Bands;

class BandsController extends Controller
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
    public function store(StoreBandsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Bands $bands)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bands $bands)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBandsRequest $request, Bands $bands)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bands $bands)
    {
        //
    }
}
