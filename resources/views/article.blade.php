@extends('layout.master')

@section('title', $article->title)

@section('konten')
    <div class="container mt-5">
        <h2 class="fw-bold mb-4">{{ $article->title }}</h2>

        <!-- Gambar Artikel -->
        @if($article->image)
        <div class="mb-4">
            <img src="{{ asset($article->image) }}" class="img-fluid rounded article-header-img" alt="{{ $article->title }}">
        </div>
        @endif

        <p class="text-muted mb-3">
            {{ $article->published_at->format('d M Y') }} | by: {{ $article->writer->name }}
        </p>

        <!-- Konten Artikel -->
        <div class="mb-4">
            <p>{!! nl2br(e($article->content)) !!}</p>
        </div>

        <div class="mb-5">
            <a href="{{ route('category.show', $category->slug) }}" class="btn btn-secondary">Back to {{ $category->name }}</a>
        </div>
    </div>
@endsection

@section('styles')
    <style>
        .article-header-img {
            width: 100%;
            height: 400px;
            object-fit: cover;
            border-radius: 8px;
        }
    </style>
@endsection
