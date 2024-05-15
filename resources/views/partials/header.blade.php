<header>
    <div class="top_header">
        <div class="container">
            DC POWER VISA©
        </div>
    </div>
    <div class="container d-flex justify-content-evenly align-items-center">
        <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="" class="logo_dc py-3">
        <nav class="nav justify-content-center align-items-center px-3">
            <a class="nav-link {{ Route::currentRouteName() === 'home' ? 'active_nav' : '' }}"
                href="{{ route('home') }}">Home</a>
        </nav>
        <nav class="nav justify-content-center align-items-center px-3">

            <a class="nav-link {{ Route::currentRouteName() === 'comic_books' ? 'active_nav' : '' }}" href="#">Add
                Comics</a>
        </nav>
        <div class="searchbar ps-3">
            <form class="d-flex search-input" role="search">
                <div class="input-group">
                    <input type="search" class="text-end border-0" placeholder="Search">
                    <span class="border-0">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </span>
                </div>
            </form>
        </div>
    </div>
    <div class="hero">
        <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="" class="hero">
    </div>

</header>
