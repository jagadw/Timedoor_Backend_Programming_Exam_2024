<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rating</title>
</head>
<body>
    <div class="rating" align="center">
        <h1>Insert Rating</h1>
        
        <form action="{{ route('insert_rating') }}" method="POST">
            @csrf

            <p>Book Author: 
                <select name="author_id" id="author_id">
                    @foreach($authors as $author)
                        <option value="{{ $author->author_id }}">{{ $author->name }}</option>
                    @endforeach
                </select>
            </p>

            <p>Book Name: 
                <select name="book_id" id="book_id">
                    @foreach($books as $book)
                        <option value="{{ $book->id_books }}">{{ $book->title }}</option>
                    @endforeach
                </select>
            </p>

            <p>Rating: <input type="number" name="rating" min="1" max="10"></p>
            <p><input type="submit" value="Submit"></p>    
        </form>
    </div>
</body>
</html>