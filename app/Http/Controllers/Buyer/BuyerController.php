<?php

namespace App\Http\Controllers\Buyer;

use App\Models\Buyer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BuyerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $buyers = \App\Models\Buyer::has('transactions')->get();

        return response()->json(['data' => $buyers], 200);
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $buyer = Buyer::has('transactions')->findOrFail($id);

        return response()->json(['data' => $buyer], 200);
    }
}
