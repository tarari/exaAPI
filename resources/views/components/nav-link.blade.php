<a href="{{ $href }}" class="text-sm mx-4 text-blue-500 active:underline hover:text-blue-800" :active="request()->routeIs($active)">{{ $slot }}</a>
