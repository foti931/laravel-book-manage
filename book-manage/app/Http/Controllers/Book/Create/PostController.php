<?php

namespace App\Http\Controllers\Book\Create;

use App\Http\Controllers\Controller;
use App\Http\Requests\Book\Create\PostRequest;
use App\Models\Book;

class PostController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(PostRequest $request)
    {
        $book = new Book();
        $book->title = $request->title;
        $book->isbn = (int)$request->isbn;
        $book->publication = $request->publication;
        $book->note = $request->note;
        $book->save();

        return redirect('books')
                ->with('feedback.success', '本を登録しました。');
    }
}
