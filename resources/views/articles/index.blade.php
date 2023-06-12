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
            <li><a class="dropdown-item" href="/authors/index">Author</a></li>
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
    <div class="row" style="padding-top: 1%">
        <div class="col">
            <h1>List Of Music</h1>
        </div>
        <div class="d-flex justify-content-end">
    <a href="{{ route('articles.create') }}" class="btn btn-success"><i class="bi bi-plus"></i> Add New</a>
</div>
    </div>
</div>

<div class="container" style="padding-top: 1.5%">
    <div class="row">
        @foreach ($articles as $article)
        <div class="col-md-3 mb-2">
            <div class="card">
                <img src="{{ $article->hinhanh }}" class="card-img-top" alt="Article Image">
                <div class="card-body">
                    <h5 class="card-title">{{ $article->tieude }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $article->ten_bhat }}</h6>
                    <p class="card-text">{{ $article->tomtat }}</p>
                    <a href="{{ route('articles.show', $article) }}" class="card-link"><i class="bi bi-eye-fill"></i> View</a>
                    <a href="{{ route('articles.edit', $article) }}" class="card-link"><i class="bi bi-pencil-square"></i> Edit</a>
                    <form action="{{ route('articles.destroy', $article->ma_bviet) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="card-link btn btn-link text-danger" onclick="return confirm('Are you sure you want to delete this article?')">
                            <i class="bi bi-trash3"></i> Delete
                        </button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
