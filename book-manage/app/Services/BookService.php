<?php

namespace App\Services;

use App\Models\Book;

class BookService
{

    /**
     * @param int $bookId
     * @return Book
     */
    public function getBook(int $bookId):Book
    {
        return Book::with('images')->where('id',$bookId)->firstOrFail();
    }

    /**
     * @return array
     */
    public function getBooksOrderByCreatedAtDescANdPaging()
    {
        return Book::with('images')->orderBy('created_at', 'DESC')->paginate(20);
    }
}
