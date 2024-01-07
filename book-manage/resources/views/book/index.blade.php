<x-layout>
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="mb-10">
                {{ $books->onEachSide(3)->links() }}
            </div>
            <div class="flex flex-wrap -m-4">
                @foreach($books as $book /** @var App\Models\Book $book */)
                    <x-element.book.card :book="$book"></x-element.book.card>
                @endforeach
            </div>
            <div class="mt-5">
                {{ $books->onEachSide(3)->links() }}
            </div>
        </div>
    </section>
</x-layout>
