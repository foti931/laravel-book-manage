@props([
    'book' /** @var App\Models\Book $@book */
])
<div class="lg:w-1/4 md:w-1/2 p-4 w-full">
    <a href="{{ route('books.detail-bookId', ['bookId' => $book->id]) }}" class="block relative h-48 rounded overflow-hidden">
        <img alt="{{ count($book->images) > 0 ? $book->images[0]->name : '画像はありません' }}"
             class="object-cover object-center w-full h-full block" src="{{ asset('storage/images/'. (count($book->images) > 0 ? $book->images[0]->name : '')) }}"/>
    </a>
    <div class="mt-4">
        <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
        <h2 class="text-gray-900 title-font text-lg font-medium">{{ $book->authors->first() }}</h2>
        <p class="mt-1">$18.40</p>
    </div>
</div>
