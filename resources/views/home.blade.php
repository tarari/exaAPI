<x-layout>
    <div id="search" class="flex flex-col items-center justify-center py-4 w-full">
        <form action="/search" class="flex flex-inline w-full items-center justify-center" smethod="GET">
            @csrf
            <input class="m-2 p-2 border-2 rounded-md w-1/2" type="text" name="category_id" placeholder="Search...by Category">
            <input type="submit"  class="m-2 bg-blue-500 text-white px-4 py-2 rounded-md" value="Search">
        </form>
    </div>
    <div>

    </div>
    <div>
        <div class="flex flex-col items-center justify-center">
            <h1 class="text-xl font-bold">Results</h1>
            <div id="results" class="flex flex-wrap justify-center"></div>
        </div>
    </div>
</x-layout>
