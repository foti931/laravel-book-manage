<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Image;
use Database\Factories\ImageFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::factory()->count(100)->create()->each(fn($book) =>
            Image::factory()->count(4)->create()->each(fn($image) =>
                $book->images()->attach($image->id)
            )
        );
    }
}
