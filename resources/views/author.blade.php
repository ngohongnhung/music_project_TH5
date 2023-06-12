@extends('layout.base')

@section('title','Author page')

@section('main')
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
    <div class="mt-3">
        <a href="{{ route('articles.index') }}" class="btn btn-primary"><i class="bi bi-arrow-left"></i> Back to Articles</a>
    </div>
@endsection
