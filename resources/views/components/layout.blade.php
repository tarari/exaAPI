<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>API.proof</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex flex-col h-screen justify-between h-screen overflow-hidden">
    <header class=" bg-gray-500 text-center  text-white  p-4 rounded-sm flex">
        <div class="px-4"><img class="w-8 h-8 flex-inline rounded-full opacity-50" alt="logo" src="{{ Vite::asset('resources/img/logoface.png') }}"></div>
        <div class="px-4"><h1 class="flex-inline text-2xl">ApiProof v.1.0</h1></div></header>
    <x-nav>{{ $slot }}</x-nav>
    <div id="search" class="flex flex-col items-center justify-center py-4 w-full">
        <form action="" class="flex flex-inline w-full items-center justify-center" method="POST">
            @csrf
            <input class="m-2 p-2 border-2 rounded-md w-1/2" type="text" name="category_id" placeholder="Search...by Category">
            <input type="submit"  class="m-2 bg-blue-500 text-white px-4 py-2 rounded-md" value="Search">
        </form>
    </div>
    <main class="mb-auto overflow-y-scroll">
        {{ $slot }}
    </main>
    <div>
        @include('partials.errors')
    </div>
    <footer class="w-full bg-black text-white px-auto py-4 text-center">API.Proof - by Toni Jimenez, 2024</footer>
</body>
</html>
