<?php

namespace App\Http\Controllers\Book;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Services\BookService;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, BookService $service)
    {
        $books = $service->getBooksOrderByCreatedAtDescANdPaging();

        return view('book.index')
                ->with('books', $books);
    }
}
