<div class="flex flex-inline items-center bg-gray-200 p-2">
@if (session()->has('name'))
<x-nav-link href="{{ route('logout') }}" :active="request()->routeIs('logout')">Logout</x-nav-link>
@else
<x-nav-link href="{{ route('login') }}" :active="request()->routeIs('login')">Login</x-nav-link>
@endif
<x-nav-link href="{{ route('products') }}" :active="request()->routeIs('products')">Products</x-nav-link>
<x-nav-link href="{{ route('vendors') }}" :active="request()->routeIs('vendors')">Vendors</x-nav-link>
<x-nav-link href="{{ route('categories') }}" :active="request()->routeIs('categories')">Categories</x-nav-link>
</div>
