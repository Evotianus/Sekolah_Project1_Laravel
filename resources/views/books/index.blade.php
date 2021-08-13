<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book List</title>
</head>

<body>
    <div style="background: #388BF2; font-size: 24px; color: white">
        Simple Library App
    </div>

    <div style="margin-top: 20px; margin-bottom: 20px">
        <table border="1">
            <a href="/books/add">Add new book</a>

            <thead>
                <td> No </td>
                <td> Title </td>
                <td> Author </td>
                <td> Publication </td>
                <td> Year </td>
                <td colspan="2"> Action </td>
            </thead>

            <tbody>
                @foreach ($books as $index => $book)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td><a href="{{ url('/books', $book->id) }}"> {{ $book->title }} </a></td>
                        <td>{{ $book->author }}</td>
                        <td>{{ $book->publication }}</td>
                        <td>{{ $book->year }}</td>
                        <td><a href="{{ url('/books/edit', $book->id) }}"> Edit </a></td>
                        <td>
                            <form action="/books/{{ $book->id }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}

                                <div>
                                    <input type="text" value="Delete">
                                </div>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
