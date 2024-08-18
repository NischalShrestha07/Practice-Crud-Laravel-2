<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Book</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

</head>

<body>
    <div class="container ">
        <div class="navbar">
            <h1>Create New Book</h1>
            <a href="{{ route('books.index') }}" class="btn btn-primary">Back</a>
        </div>
        <form action="{{ route('books.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label class="h5 " for="title">Title:</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}">
            </div>
            <div class="form-group">
                <label class="h5 " for="author">Author:</label>
                <input type="text" name="author" id="author" class="form-control" value="{{ old('author') }}">
            </div>
            <div class="form-group">
                <label class="h5 " for="yearPublished">Year Published:</label>
                <input type="text" name="yearPublished" id="yearPublished" class="form-control"
                    value="{{ old('yearPublished') }}">
            </div>
            <button type="submit" class="btn btn-success">Save</button>
        </form>
    </div>


</body>

</html>
