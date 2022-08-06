<?php

namespace App\Http\Controllers;

use App\Models\ListTransaction;
use App\Http\Requests\StoreListTransactionRequest;
use App\Http\Requests\UpdateListTransactionRequest;

class ListTransactionController extends Controller
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
     * @param  \App\Http\Requests\StoreListTransactionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreListTransactionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ListTransaction  $listTransaction
     * @return \Illuminate\Http\Response
     */
    public function show(ListTransaction $listTransaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ListTransaction  $listTransaction
     * @return \Illuminate\Http\Response
     */
    public function edit(ListTransaction $listTransaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateListTransactionRequest  $request
     * @param  \App\Models\ListTransaction  $listTransaction
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateListTransactionRequest $request, ListTransaction $listTransaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ListTransaction  $listTransaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(ListTransaction $listTransaction)
    {
        //
    }
}
