<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>All beers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container m-5">
        <h1>All Beers</h1>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                        </tr>
                    </thead>
                    <tbody>

                            @foreach ($beers as $beer)
                                <tr>
                                    <th scope="row">{{ $beer->id }}</th>
                                    <td>{{ $beer->name }}</td>
                                    <td>{{ $beer->description }}</td>
                                </tr>
                            @endforeach
                    </tbody>
                </table>
                {{-- Pagination --}}
                <div class="d-flex justify-content-center">
                    {{ $beers->links() }}
                </div>
            </div>
        </div>
    </div>
</body>
</html>
