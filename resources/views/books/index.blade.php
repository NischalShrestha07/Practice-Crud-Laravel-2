<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Books List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

</head>

<body>
    <div class="container">
        <div class="navbar">
            <h1>Books</h1>
            <a href="{{ route('books.create') }}" class="btn btn-success btn-sm">Add New Book</a>
        </div>
        {{-- session --}}
        @if (@session('success'))
            <span class="alert alert-success">{{ session('success') }}</span>
        @endif

        <br><br>



        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Year Published</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($book as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->author }}</td>
                        <td>{{ $item->yearPublished }}</td>

                        <td>
                            <a style="padding: 8px 15px" href="{{ route('books.edit', $item) }}"
                                class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('books.destroy', $item) }} " method="POST" style="display: inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Are You! Want to Delete It?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</body>

</html>
