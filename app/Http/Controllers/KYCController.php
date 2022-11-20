<?php

namespace App\Http\Controllers;

use App\KYC;
use App\Http\Requests\StoreKYCRequest;
use App\Http\Requests\UpdateKYCRequest;

class KYCController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreKYCRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKYCRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\KYC  $kYC
     * @return \Illuminate\Http\Response
     */
    public function show(KYC $kYC)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\KYC  $kYC
     * @return \Illuminate\Http\Response
     */
    public function edit(KYC $kYC)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKYCRequest  $request
     * @param  \App\KYC  $kYC
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKYCRequest $request, KYC $kYC)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\KYC  $kYC
     * @return \Illuminate\Http\Response
     */
    public function destroy(KYC $kYC)
    {
        //
    }
}
