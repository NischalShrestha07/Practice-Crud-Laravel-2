<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Book</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

</head>

<body>
    <div class="container">
        <div class="navbar">
            <h1>Edit Books</h1>
            <a href="{{ route('books.index') }}" class="btn btn-primary">Back</a>
        </div>
        <form action="{{ route('books.update', $book) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label class="h5 " for="title">Title:</label>
                <input type="text" name="title" id="title" class="form-control"
                    value="{{ old('title', $book->title) }}">

                @error('title')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label class="h5" for="author">Author:</label>
                <input type="text" name="author" id="author" class="form-control"
                    value="{{ old('author', $book->author) }}">
                @error('author')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label class="h5 " for="yearPublished">Year Published:</label>
                <input type="text" name="yearPublished" id="yearPublished" class="form-control"
                    value="{{ old('yearPublished', $book->yearPublished) }}">
                @error('yearPublished')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-success">Update</button>
        </form>
    </div>

</body>

</html>
