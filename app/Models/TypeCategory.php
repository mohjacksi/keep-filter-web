<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeCategory extends Model
{
    use HasFactory;


    /**
     * Get all of the Products for the TypeCategory
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Products()
    {
        return $this->hasMany(Product::class,);
    }
    
}
