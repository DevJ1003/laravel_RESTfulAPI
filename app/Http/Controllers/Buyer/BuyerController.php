<?php

namespace App\Http\Controllers\Buyer;

use App\Models\Buyer;
use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;

class BuyerController extends ApiController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $buyers = \App\Models\Buyer::has('transactions')->get();

        return $this->showAll($buyers);
    }


    /**
     * Display the specified resource.
     */
    public function show(Buyer $buyer)
    {
        // $buyer = Buyer::has('transactions')->findOrFail($id);

        return $this->showOne($buyer);
    }
}
