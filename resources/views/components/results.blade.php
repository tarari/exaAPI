<div class="flex flex-col items-center justify-center bg-blue-100">
    @foreach ($data as $item)
    <code> {{ print_r($item) }} </code>
    @endforeach
</div>

@push('scripts')
        <script>
            const results = document.getElementById('results');
            results.innerHTML = '{{$slot}}';
        </script>
    @endpush
