<x-layout>
    <section class="text-gray-600 body-font">
        <form action="{{ route('books.create.post') }}" method="POST">
            @csrf
            <div class="container px-5 py-24 mx-auto flex flex-wrap items-center">
                <div class="bg-gray-100 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">
                    @if('feedback.success')
                        <p>{{ session('feedback.success') }}</p>
                    @endif
                    <h2 class="text-gray-900 text-lg font-medium title-font mb-5">書籍登録</h2>
{{--                    <div class="relative mb-4">--}}
{{--                        <label for="full-name" class="leading-7 text-sm text-gray-600">フルネーム</label>--}}
{{--                        <input type="text" id="full-name" name="full-name" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">--}}
{{--                    </div>--}}
{{--                    <div class="mb-4 flex">--}}
{{--                        <div class="relative mr-10 w-6/12">--}}
{{--                            <label for="last-name" class="leading-7 text-sm text-gray-600">苗字</label>--}}
{{--                            <input type="text" id="last-name" name="last-name" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">--}}
{{--                        </div>--}}
{{--                        <div class="relative w-6/12">--}}
{{--                            <label for="first-name" class="leading-7 text-sm text-gray-600">名前</label>--}}
{{--                            <input type="text" id="first-name" name="first-name" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="mb-4 flex">--}}
{{--                        <div class="relative mr-10 w-6/12">--}}
{{--                            <label for="last-name-kana" class="leading-7 text-sm text-gray-600">フリガナ(苗字)</label>--}}
{{--                            <input type="text" id="last-name-kana" name="last-name-kana" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">--}}
{{--                        </div>--}}
{{--                        <div class="relative w-6/12">--}}
{{--                            <label for="first-name-kana" class="leading-7 text-sm text-gray-600">フリガナ(名前)</label>--}}
{{--                            <input type="text" id="first-name-kana" name="first-name-kana" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="relative mb-4">--}}
{{--                        <label for="email" class="leading-7 text-sm text-gray-600">Email</label>--}}
{{--                        <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">--}}
{{--                    </div>--}}
                    <div class="relative mb-4">
                        <label for="title" class="leading-7 text-sm text-gray-600">書籍名</label>
                        <input type="text" id="title" name="title" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" value="{{ old('title') }}">
                        @error('title')
                        <div role="alert">
                            @foreach($errors->get('title') as $error)
                                <ul class="w-full">
                                    <ui class="text-white bg-red-500">
                                        {{ $error }}
                                    </ui>
                                </ul>
                            @endforeach
                        </div>
                        @enderror
                    </div>
                    <div class="relative mb-4">
                        <label for="isbn" class="leading-7 text-sm text-gray-600">ISBN</label>
                        <input type="text" id="isbn" name="isbn" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        @error('isbn')
                        {{ $message }}
                        @enderror
                    </div>
                    <div class="relative mb-4">
                        <label for="publication" class="leading-7 text-sm text-gray-600">出版社</label>
                        <input type="text" id="publication" name="publication" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>
                    <div class="relative mb-4">
                        <label for="note" class="leading-7 text-sm text-gray-600">メモ</label>
                        <input type="text" id="note" name="note" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>
                    <button type="submit" class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">登録</button>
                </div>
            </div>
        </form>
    </section>
</x-layout>
