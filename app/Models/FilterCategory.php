<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FilterCategory extends Model
{
    use HasFactory;

    /**
     * The Products that belong to the FilterCategory
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function Products()
    {
        return $this->belongsToMany(Product::class, Filter_product::class);
    }
}
