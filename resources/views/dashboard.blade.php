<x-layout>
    <div id="search" class="flex flex-col items-center justify-center py-4 w-full">
        <div>
            <a href="{{route('products')}}">
                <button  class="m-2 bg-teal-500 text-white px-4 py-2 rounded-md">Products</button></a>
            </a>
            <button class="m-2 bg-teal-500 text-white px-4 py-2 rounded-md">Categories</button>
            <button class="m-2 bg-teal-500 text-white px-4 py-2 rounded-md">Vendors</button>
        </div>
    </div>
    <div>

    </div>
    <div>
        <div class="flex flex-col items-center justify-center">
            <h1 class="text-3xl font-bold">Results</h1>
            <div id="results" class="flex flex-wrap justify-center"></div>
        </div>
    </div>
</x-layout>
