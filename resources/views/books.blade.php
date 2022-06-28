<h1>La lista di libri</h1>
<ul>
    {{-- {{ dd($books) }} --}}
    @foreach ($books as $item)
        <li>
            <h3>{{ $item->name }}</h3>
            <p>{{ $item->author }}</p>
            <p>Anno: {{ $item->year }}</p>
        </li>
    @endforeach
</ul>