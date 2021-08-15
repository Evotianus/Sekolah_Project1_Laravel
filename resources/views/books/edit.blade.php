<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <form action="/books/{{ $id->id }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" value="{{ $id->title }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Author</label>
                        <input type="text" class="form-control" name="author" value="{{ $id->author }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Publication</label>
                        <input type="text" class="form-control" name="publication" value="{{ $id->publication }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Year</label>
                        <input type="text" class="form-control" name="year" value="{{ $id->year }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
