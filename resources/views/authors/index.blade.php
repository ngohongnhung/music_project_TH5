<!DOCTYPE html>
<html>
<head>
    <title>Music Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>

<div class="container">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Vietcodedi</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('articles.index') }}">Home</a>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Other
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/authors/index.php">Author</a></li>
            <li><a class="dropdown-item" href="/categories/index">Category</a></li>

          </ul>
        </li>
      </ul>
      <form class="d-flex ml-auto">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-primary" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div class="container">
        <h1>List of Authors</h1>
        <div class="row">
            @foreach ($authors as $author)
            <div class="col-md-3 mb-2">
                <div class="card">
                    <img src="{{ $author->hinh_tgia }}" class="card-img-top" alt="Author Image">
                    <div class="card-body">
                        <h5 class="card-title">{{ $author->ten_tgia }}</h5>
                    </div>
    <div>
                    <a href="#" class="card-link"><i class="bi bi-pencil-square"></i> Edit</a>
                    <form action="{{ route('authors.destroy', $author->ma_tgia) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="card-link btn btn-link text-danger" onclick="return confirm('Are you sure you want to delete this author?')">
                            <i class="bi bi-trash3"></i> Delete
                        </button>
                    </form>
    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="mt-3">
        <a href="{{ route('articles.index') }}" class="btn btn-primary"><i class="bi bi-arrow-left"></i> Back to Articles</a>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
