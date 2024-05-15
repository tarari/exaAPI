<x-layout>
    <div  class="flex flex-col items-center justify-center py-4 w-full">
        <div>
            <a href="{{route('products')}}">
                <button  class="m-2 bg-teal-500 text-white px-4 py-2 rounded-md">Products</button></a>
            </a>
            <a href="{{route('categories')}}">
                <button class="m-2 bg-teal-500 text-white px-4 py-2 rounded-md">Categories</button>
            </a>
            <a href="{{route('vendors')}}">
                <button class="m-2 bg-teal-500 text-white px-4 py-2 rounded-md">Vendors</button>
            </a>
        </div>
    </div>
    <div>

    </div>
    <div>
        <div class="flex flex-col items-center justify-center">
            <h1 class="text-3xl font-bold">Results</h1>
            <div id="results" class="flex flex-wrap justify-center">
            @isset($data)
                <x-results :data="$data"/>
            @endisset
            </div>
        </div>
    </div>
</x-layout>
