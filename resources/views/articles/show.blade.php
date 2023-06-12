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
<div class="container">
    <h1>Article Details</h1>
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">{{ $article->tieude }}</h2>
            <p class="card-text"><strong>Song Name:</strong> {{ $article->ten_bhat }}</p>
            <p class="card-text"><strong>Author:</strong> {{ $article->author->ten_tgia }}</p>
            <p class="card-text"><strong>Category:</strong> {{ $article->category->ten_tloai }}</p>
            <p class="card-text"><strong>Summary:</strong> {{ $article->tomtat }}</p>
            <p class="card-text"><strong>Content:</strong> {{ $article->noidung }}</p>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
