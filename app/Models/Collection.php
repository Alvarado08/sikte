<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Collection extends Model
{
    use HasFactory;

    protected $fillable = ['name','slug','image','description'];

    /**
     * The categories that belong to the Collection
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class,'collection_category');
    }

    /**
     * Get all of the products for the Collection
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }

    /**
     * Get all of the carouselImages for the Collection
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function carouselImages(): HasMany
    {
        return $this->hasMany(Carousel::class);
    }
}
