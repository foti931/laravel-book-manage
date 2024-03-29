<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Book extends Model
{
    use HasFactory;

    /**
     * @return HasMany
     */
    public function recommendations():HasMany
    {
        return $this->hasMany(BookRecommendation::class);
    }

    /**
     * @return BelongsToMany
     */
    public function authors():BelongsToMany
    {
        return $this->belongsToMany(Author::class, 'book_authors')
                ->using(Author::class);
    }

    /**
     * @return BelongsToMany
     */
    public function images():BelongsToMany
    {
        return $this->belongsToMany(Image::class, 'book_images')
            ->using(BookImage::class);
    }
}
