<x-layout>
    <div class="flex flex-col items-center justify-center">
        <form action="{{ route('auth') }}" method="POST" class="flex flex-inline w-full items-center justify-center">
            @csrf
            <input class="m-2 p-2 border-2 rounded-md w-1/2" type="text" name="email" placeholder="Email">
            <input class="m-2 p-2 border-2 rounded-md w-1/2" type="password" name="password" placeholder="Password">

            <input type="submit"  class="m-2 bg-blue-500 text-white px-4 py-2 rounded-md" value="Login">

        </form>
    </div>
</x-layout>
