<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit Book</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form method="post" action="{{ route('bukus.update', ['id' => $book->id]) }}">
        @csrf
        @method('put')

        <label for="title">Title:</label>
        <input type="text" name="title" value="{{ $book->title }}" required>

        <label for="author">Author:</label>
        <input type="text" name="author" value="{{ $book->author }}" required>

        <label for="year">Year:</label>
        <input type="text" name="year" value="{{ $book->year }}" required>

        <button type="submit">Update Book</button>
    </form>


</body>
</html>