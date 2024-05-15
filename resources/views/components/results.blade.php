
@foreach ($data as $item)
<pre>
    <span class="text-mono text-sm text-gray-500">
    @php
        print_r($item);
    @endphp
</span>
</pre>


@endforeach
