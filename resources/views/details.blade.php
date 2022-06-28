<h1>Le prove con le istruzioni eloquent</h1>
<ul>
    @foreach ($books as $book)
        <li>
            <h3>{{ $book->name }}</h3>
            <p>{{ $book->author }}</p>
            <p>Anno: {{ $book->year }}</p>
        </li>
    @endforeach
</ul>
