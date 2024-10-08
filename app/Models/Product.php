<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'usine',
        'interne',
        'description',
        'image',
        'purchase_prices',
        'sale_prices',
        'sizes',
        'stock_min',
        'stock',
        'presentations',
        'is_product',
        'type_sale_affectation_id',
        'type_purchase_affectation_id',
        'type_unit_measure_id',
        'status'
    ];

    public function getImageAttribute($value)
    {
        return ($value != 'img/imagen-no-disponible.jpg' ? asset('storage/' . $value) : asset($value));
    }

    public function categories(): HasMany
    {
        return $this->hasMany(ProductCategory::class, 'product_id');
    }
}
