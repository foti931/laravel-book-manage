<?php

namespace App\Http\Controllers\Book\Create;

use App\Http\Controllers\Controller;
use App\Http\Requests\Book\Create\PostRequest;
use App\Models\Book;
use App\Services\BookService;

class PostController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(PostRequest $request, BookService $service)
    {
        $service->saveBook(
            $request->title(),
            $request->isbn(),
            $request->publication(),
            $request->note(),
            $request->images(),
        );

        return redirect('books')
                ->with('feedback.success', '本を登録しました。');
    }
}
