<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Salesdetails;
use App\Models\Sales;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('sales.create');
    }

    /**
     * Search function
     **/

     public function search(Request $request)
     {
        $query = $request->input('product_code');
        $products = Product::where('category', 'like', '%', $query, '%')->get();
        return response()->json($products);
     }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{

            $lastId = null;
            DB::transaction(function()use($request, $lastId){
                $Sales = Sales::create([
                    'total' => $request->input('total'),
                    'pay' => $request->input('pay'),
                    'balance' => $request->input('balance'),
                ]);

                $lastId = $Sales->id;

                foreach ($request->input('products') as $product){
                    Salesdetails::create([
                        'sale_id' => $Sales->id,
                        'product_id' => $product('barcode'),
                        'price' => $product('pro_price'),
                        'quantity'=> $product('qty'),
                        'total_cost' => $product('total_cost'),
                    ]);
                }
            });

            return response()->json
            (['message' => 'Sales added successfully',
                    'lastId' => $lastId
            ]);

        } catch (Exception $e){

            return response()->json
            (['message' => 'error adding sales',
            'error' => $e->getMessage()
        ], 500);
            
        }
    }

    
}
