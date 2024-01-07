<?php

namespace App\Services;

use App\Models\Book;

class BookService
{

    /**
     * @param int $bookId
     * @return Book
     */
    public function getBook(int $bookId)
    {
        return Book::where('id',$bookId)->firstOrFail();
    }
}
