<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $fillable = [
        'code',
        'lot',
        'name',
        'breeder_id',
        'deposit_id',
        'genetic_id',
        'price',
        'stock',
        'product_type_id', 
    ];
    
    public function breeder()
    {
        return $this->belongsTo(Breeder::class, 'breeder_id');
    }
    public function deposit()
    {
        return $this->belongsTo(Deposit::class, 'deposit_id');
    }
    public function genetic()
    {
        return $this->belongsTo(Genetic::class, 'genetic_id');
    }
    public function productType()
    {
        return $this->belongsTo(ProductType::class, 'product_type_id');
    }
}
