<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * The Product that belong to the Cars
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function Cars()
    {
        return $this->belongsToMany(CarCategory::class, Car_product::class);
    }


    /**
     * The Product that belong to the Filters
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function Filters()
    {
        return $this->belongsToMany(FilterCategory::class, Filter_product::class);
    }

    /**
     * Get the TypeCategory associated with the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function TypeCategory()
    {
        return $this->hasOne(TypeCategory::class, 'id', 'type_category_id');
    }

    /**
     * Get all of the Images for the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Images()
    {
        return $this->hasMany(Image::class);
    }

    /**
     * Get all of the First_Image for the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function First_Image()
    {
        return $this->hasMany(Image::class)->limit(1);
    }

}
