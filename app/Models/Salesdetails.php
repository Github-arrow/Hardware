<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salesdetails extends Model
{
    use HasFactory;

    protected $table = 'salesdetails';
    protected $tableprimaryKey = 'id';
    protected $fillable = [
        'sales_id',
        'product_id',
        'price',
        'quantity',
        'total_cost',
    ];

    public function sales()
    {
        return $this->belongsTo(Sales::class, 'sales_id');
    }
}
