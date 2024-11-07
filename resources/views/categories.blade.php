@extends('layout.master')

@section('title', $category->name)

@section('konten')
    <div class="container-fluid mt-3">
        <h2 class="fw-bold mb-4">{{ $category->name }}</h2>

        @foreach($articles as $article)
            <div class="row mb-4">
                <!-- Gambar Artikel -->
                <div class="col-md-3">
                    <img src="{{ asset($article->image) }}" class="img-fluid rounded" alt="{{ $article->image }}">
                </div>

                <!-- Detail Artikel -->
                <div class="col-md-9">
                    <h5 class="fw-bold">{{ $article->title }}</h5>
                    <p class="text-muted mb-1">
                        {{ $article->published_at->format('d M Y') }} | by: {{ $article->writer->name }}
                    </p>
                    <p>{{ Str::limit($article->content, 100) }}</p>
                    <a href="{{ route('detail', [$category->slug, $article->course->slug, $article->id]) }}" class="btn btn-primary">Read more...</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
