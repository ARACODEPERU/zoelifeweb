<?php

namespace Modules\Onlineshop\Entities;

use App\Models\Country;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;

class OnliItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_id',
        'entitie',
        'category_description',
        'name',
        'description',
        'scor',
        'price',
        'discount',
        'image',
        'status',
        'additional',
        'additional1',
        'additional2',
        'country_id'
    ];

    protected static function newFactory()
    {
        return \Modules\Onlineshop\Database\factories\OnliItemFactory::new();
    }

    public function getImageAttribute($value)
    {
        return ($value ? asset('storage/' . $value) : asset($value));
    }

    public function country(): HasOne
    {
        return $this->hasOne(Country::class, 'id', 'country_id');
    }
}
