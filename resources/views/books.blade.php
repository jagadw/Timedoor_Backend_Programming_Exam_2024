<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Of Books</title>
</head>
<body>
    <form action="{{ url('books') }}">
        <p>List shown : <input type="number" name="paginate"></p>
        <p>Search     : <input type="search" name="search"></p>
        <p><input type="submit" hidden></p>
    </form>
    <table border="1" align="center">
        <tr>
            <th>No</th>
            <th>Book Name</th>
            <th>Author Name</th>
            <th>Category Name</th>
            <th>Average Rating</th>
            {{-- <th>Price</th>
            <th>Publisher</th>
            <th>Released Date</th> --}}
            <th>Voter</th>
        </tr>
        @foreach ($books as $book)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $book->title }}</td>
            <td>{{ $book->author->name }}</td>
            <td>{{ $book->category->name }}</td>
            <td>{{ $book->id_rating }}</td>
            {{-- <td>{{ $book->price }}</td>
            <td>{{ $book->publisher }}</td>
            <td>{{ $book->released_date }}</td> --}}
            <td>{{ $book->ratings_count }}</td>
        </tr>
        @endforeach
    </table>

    <div align="center">
        {{ $books->links() }}
    </div>

</body>
</html>