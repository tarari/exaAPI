@if (session('error'))
    <div class="mx-auto p-2 text-center w-1/3 bg-red-200 text-red-500 text-sm rounded-md">
        {{ session('error') }}
    </div>
@endif
