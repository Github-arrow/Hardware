<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sales;

class PrintController extends Controller
{
    public function showPrintForm($sales_id)
    {
        $sales = Sales::findOrFail($sales_id);

        $Salesdetails = $sales->Salesdetails;
        $total = $sales->total;

        $grand_total = $total;
        $pay = $sales->pay;
    }
}
