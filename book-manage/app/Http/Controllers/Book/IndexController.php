<?php

namespace App\Http\Controllers\Book;

use App\Exceptions\Handler;
use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Services\BookService;
use Exception;
use Illuminate\Http\Request;
use function PHPUnit\Framework\throwException;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     * @throws \Throwable
     */
    public function __invoke(Request $request, BookService $service)
    {
        $books = $service->getBooksOrderByCreatedAtDescANdPaging();
        return view('book.index')
                ->with('books', $books);
    }
}
