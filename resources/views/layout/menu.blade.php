<div class="row">
    <div class="col-12">
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark py-1">
            <div class="container-fluid">
                <!-- Route ke halaman Home -->
                <a class="navbar-brand" href="#">
                    <img src="{{asset('images/logo.png')}}" alt="logo" height="60px" width="60">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Category
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            {{-- Looping kategori --}}
                            @foreach ($categories as $category)
                                <li>
                                    <a href="{{ route('category.show', $category->slug) }}" class="dropdown-item">
                                        {{ $category->name }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('writers') }}" class="nav-link">Writers</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('about') }}" class="nav-link">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('popular') }}" class="nav-link">Popular</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
