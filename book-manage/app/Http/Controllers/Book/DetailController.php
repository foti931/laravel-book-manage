<?php

namespace App\Http\Controllers\Book;

use App\Http\Controllers\Controller;
use App\Services\BookService;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, BookService $service)
    {
        $bookId =(int)$request->route('bookId');
        $book = $service->getBook($bookId);

        return view('book.detail')->with('book', $book);
    }
}
