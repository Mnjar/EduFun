@extends('layout.master')

@section('title', 'Our Writers')

@section('konten')
    <div class="container mt-5">
        <h2 class="fw-bold mb-4">Our Writers:</h2>
        <div class="row">
            @foreach ($writers as $writer)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset($writer->image ?? 'default-image.jpg') }}" class="card-img-top writer-img" alt="{{ $writer->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $writer->name }}</h5>
                            <p class="card-text">{{ $writer->speciality }}</p>
                            <a href="{{ route('writers.detail', $writer) }}" class="btn btn-primary">View Articles</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@section('styles')
    <style>
        .writer-img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            border-radius: 8px;
        }
    </style>
@endsection
