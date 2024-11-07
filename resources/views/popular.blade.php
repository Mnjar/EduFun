@extends('layout.master')

@section('title', 'Popular Articles')

@section('konten')
    <div class="header-image w-100">
        <img src="{{ asset('images/home/belajar.png') }}" alt="image" class="w-100" style="height: 400px; object-fit: cover; padding: 0; margin: 0;">
    </div>

    <div class="container-fluid mt-5">
        <h2 class="fw-bold mb-4">Popular Articles</h2>

        @foreach($popularArticles as $article)
            <div class="row mb-4">
                <div class="col-md-3">
                    <img src="{{ asset($article->image) }}" class="img-fluid rounded" alt="{{ $article->image }}">
                </div>

                <div class="col-md-9">
                    <h5 class="fw-bold">{{ $article->title }}</h5>
                    <p class="text-muted mb-1">
                        {{ $article->published_at->format('d M Y') }} | by: {{ $article->writer->name }}
                    </p>
                    <p>{{ Str::limit($article->content, 100) }}</p>

                    @if($article->course && $article->course->category && $article->slug)
                    <a href="{{ route('detail', [$article->course->category->slug, $article->course->slug, $article->id]) }}" class="btn btn-primary">Read more...</a>
                    @else
                        <p class="text-danger">Details not available</p>
                    @endif
                </div>
            </div>
        @endforeach

    </div>

    <div class="d-flex justify-content-center">
        <span>Page</span>
        @foreach ($popularArticles->getUrlRange(1, $popularArticles->lastPage()) as $page => $url)
            <a href="{{ route('popular.page', $page) }}" class="btn btn-link {{ $page == $popularArticles->currentPage() ? 'active' : '' }}">{{ $page }}</a>
        @endforeach
    </div>
@endsection
