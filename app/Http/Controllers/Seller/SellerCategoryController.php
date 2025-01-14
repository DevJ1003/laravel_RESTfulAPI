<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\ApiController;
use App\Models\Seller;
use Illuminate\Http\Request;

class SellerCategoryController extends ApiController
{
    /**
     * Display a listing of the resource.
     */
    public function index(Seller $seller)
    {
        $categories = $seller->products()
            ->whereHas('categories')
            ->with('categories')        // eager loading
            ->get()
            ->pluck('categories')
            ->collapse()
            ->unique('id')
            ->values();

        return $this->showAll($categories);
    }
}
