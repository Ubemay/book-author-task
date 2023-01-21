<link rel="stylesheet" href="{{asset('build/assets/app-67dcdfd2.css')}}">
<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">Name</th>
        <th scope="col">Author</th>
        <th scope="col">Description</th>
        <th scope="col">Page count</th>
    </tr>
    </thead>
    <tbody>
        @foreach($books as $book)
            @if(!is_null($book->author_id))
                <tr>
                    <td>{{ $book->name }}</td>
                    <td>
                        @if($book->author)
                            {{ $book->author->name }}
                        @endif
                    </td>
                    <td>{{ $book->description }}</td>
                    <td>{{ $book->page_count }}</td>
                </tr>
            @endif
        @endforeach
    </tbody>
</table>

<a href="{{route('books.create')}}"><button class="btn btn-primary">Create Book</button></a>
