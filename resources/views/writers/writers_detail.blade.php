@extends('layout.master')

@section('title', $writer->name)

@section('konten')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3">
                <img src="{{ asset($writer->image ?? 'default-image.jpg') }}" class="img-fluid rounded" alt="{{ $writer->name }}">
                <h3 class="fw-bold">{{ $writer->name }}</h3>
                <p class="mt-3"><strong>Speciality:</strong> {{ $writer->speciality }}</p>
            </div>
            <div class="col-md-9">
                <h4>Articles by {{ $writer->name }}</h4>
                <ul class="list-unstyled">
                    @foreach ($articles as $article)
                    <div class="row mb-4">
                        <!-- Gambar Artikel -->
                        <div class="col-md-3">
                            <img src="{{ asset($article->image) }}" class="img-fluid rounded" alt="{{$article->image}}">
                        </div>

                        <!-- Detail Artikel -->
                        <div class="col-md-9">
                            <h5 class="fw-bold">{{ $article->title }}</h5>
                            <p class="text-muted mb-1">
                                {{ $article->published_at->format('d M Y') }} | by: {{ $article->writer->name }}
                            </p>
                            <p>{{ Str::limit($article->content, 100) }}</p>
                            <a href="{{ route('detail', [$article->course->category->slug, $article->course->slug, $article->id]) }}" class="btn btn-primary">Read more...</a>
                        </div>
                    </div>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="mt-5">
            <a href="{{ route('writers') }}" class="btn btn-secondary">Back to Writers List</a>
        </div>
    </div>
@endsection
