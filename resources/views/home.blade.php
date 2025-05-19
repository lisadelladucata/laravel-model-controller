<!DOCTYPE html>
<html>
<head>
    <title>Movies</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">Movies List</h1>
    <div class="row">
        @foreach($movies as $movie)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $movie->title }}</h5>
                        <p class="card-text"><strong>Original title:</strong> {{ $movie->original_title }}</p>
                        <p class="card-text"><strong>Nationality:</strong> {{ $movie->nationality }}</p>
                        <p class="card-text"><strong>Date:</strong> {{ $movie->date }}</p>
                        <p class="card-text"><strong>Vote:</strong> {{ $movie->vote }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
</body>
</html>
