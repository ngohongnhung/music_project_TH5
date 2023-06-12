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
    <h1>Add New Article</h1>

    <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="hinhanh" class="form-label">Image</label>
            <input type="file" class="form-control" id="hinhanh" name="hinhanh">
        </div>

        <div class="mb-3">
            <label for="tieude" class="form-label">Title</label>
            <input type="text" class="form-control" id="tieude" name="tieude" required>
        </div>

        <div class="mb-3">
            <label for="ten_bhat" class="form-label">Song Name</label>
            <input type="text" class="form-control" id="ten_bhat" name="ten_bhat" required>
        </div>

        <div class="mb-3">
            <label for="ma_tloai" class="form-label">Category</label>
            <select class="form-control" id="ma_tloai" name="ma_tloai" required>
                <option value="">Select Category</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->ma_tloai }}">{{ $category->ten_tloai }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="tomtat" class="form-label">Summary</label>
            <textarea class="form-control" id="tomtat" name="tomtat" rows="3" required></textarea>
        </div>

        <div class="mb-3">
            <label for="noidung" class="form-label">Content</label>
            <textarea class="form-control" id="noidung" name="noidung" rows="5" required></textarea>
        </div>

        <div class="mb-3">
            <label for="ma_tgia" class="form-label">Author</label>
            <select class="form-control" id="ma_tgia" name="ma_tgia" required>
                <option value="">Select Author</option>
                @foreach ($authors as $author)
                    <option value="{{ $author->ma_tgia }}">{{ $author->ten_tgia }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary"><i class="bi bi-plus"></i> Add Article</button>
        <a href="{{ route('articles.index') }}" class="btn btn-secondary"><i class="bi bi-arrow-left"></i> Back to Articles</a>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
