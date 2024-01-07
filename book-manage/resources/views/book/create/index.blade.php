<x-layout>
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto flex flex-wrap items-center">
            <div class="bg-gray-100 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">
                <h2 class="text-gray-900 text-lg font-medium title-font mb-5">書籍登録</h2>
                <div class="relative mb-4 w-4/12">
                    <label for="full-name" class="leading-7 text-sm text-gray-600">フルネーム</label>
                    <input type="text" id="full-name" name="full-name" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <div class="relative mb-4 flex">
                    <div class="relative w-3/12　mr-10">
                        <label for="last-name" class="leading-7 text-sm text-gray-600">苗字</label>
                        <input type="text" id="last-name" name="last-name" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>
                    <div class="relative w-3/12">
                        <label for="first-name" class="leading-7 text-sm text-gray-600">名前</label>
                        <input type="text" id="first-name" name="first-name" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>
                </div>
                <div class="relative mb-4">
                    <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                    <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <button class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Button</button>
                <p class="text-xs text-gray-500 mt-3">Literally you probably haven't heard of them jean shorts.</p>
            </div>
        </div>
    </section>
</x-layout>
