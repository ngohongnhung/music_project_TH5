@extends('layout.base')

@section('title','Home page')

@section('main')

<div class="container" style="padding-top: 1.5%">
    <div class="row">
        @foreach ($articles as $article)
        <div class="col-md-4">
            <div class="card">
                <img src="{{ $article->hinhanh }}" class="card-img-top" alt="Article Image">
                <div class="card-body">
                    <h5 class="card-title">{{ $article->tieude }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $article->ten_bhat }}</h6>
                    <p class="card-text">{{ $article->tomtat }}</p>
                    <a href="#" class="card-link"><i class="bi bi-eye-fill"></i> View</a>
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
@endsection
