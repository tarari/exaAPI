<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>API.proof</title>
</head>
<body class="flex flex-col h-screen justify-between h-screen overflow-hidden">
    <header class="h-10 bg-gray-500 text-center  text-white text-3xl">ApiProof v.1.0</header>
    <x-nav>{{ $slot }}</x-nav>
    <main class="mb-auto h-10 overflow-y-scroll">
        {{ $slot }}
    </main>

    <footer class="w-full bg-black text-white px-auto py-4 text-center">API.Proof - by Toni Jimenez, 2024</footer>
</body>
</html>
