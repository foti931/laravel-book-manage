<?php

namespace App\Services;

use App\Models\Book;
use App\Models\Image;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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

    /**
     * @param int $userId
     * @param Book $request
     * @param Image[] $images
     * @return void
     */
    public function saveBook(string $title,string $isbn,string $publication, string $note, array $images): void
    {
        DB::transaction(function () use($title, $isbn, $publication, $note , $images) {
            $book = new Book();
            $book->title = $title;
            $book->isbn = (int)$isbn;
            $book->publication = $publication;
            $book->note = $note;
            $book->save();

            foreach ($images as $image){
                Storage::putFile('public/images',$image);
                $imageModel = new Image();
                $imageModel->name = $image->hashName();
                $imageModel->save();
                $book->images()->attach($imageModel->id);
            }
        });
    }
}
