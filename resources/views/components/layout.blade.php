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
    <header class="h-10 bg-gray-500 text-center  text-white  p-4 rounded-sm flex">
        <div class="px-4"><img class="w-8 h-8 flex-inline rounded-full " alt="logo" src="{{ Vite::asset('resources/img/logoface.png') }}"></div>
        <div class="px-4"><h1 class="flex-inline text-2xl">ApiProof v.1.0</h1></div></header>
    <x-nav>{{ $slot }}</x-nav>
    <main class="mb-auto overflow-y-scroll">
        {{ $slot }}
    </main>

    <footer class="w-full bg-black text-white px-auto py-4 text-center">API.Proof - by Toni Jimenez, 2024</footer>
</body>
</html>
