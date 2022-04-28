<header>
    <div class="blue-band">
        <div class="container">
            <h4>DC POWER VISA</h4>
            <h4>ADDITIONAL DC SITES</h4>
        </div>
    </div>
    <nav>
        <div class="container">
            <div class="logo-container">
                <a href="/"><img src="/images/dc-logo.png" alt=""></a>
            </div>

            <ul class="nav-list">
                <li class="{{ Route::currentRouteName() === 'characters' ? 'active' : '' }}"><a href="/characters">CHARACTERS</a></li>
                <li class="{{ Route::currentRouteName() === 'comics' || Route::currentRouteName() === 'comic' ? 'active' : '' }}"><a href="/comics">COMICS</a></li>
                <li class="{{ Route::currentRouteName() === 'movies' ? 'active' : '' }}"><a href="/movies">MOVIES</a></li>
                <li class=""><a href="#">TV</a></li>
                <li class=""><a href="#">GAMES</a></li>
                <li class=""><a href="#">COLLECTIBLES</a></li>
                <li class=""><a href="#">VIDEOS</a></li>
                <li class=""><a href="#">FANS</a></li>
                <li class=""><a href="#">NEWS</a></li>
                <li class=""><a href="#">SHOP</a></li>
            </ul>

            <div class="search">
                <input type="text">
            </div>
        </div>

        <div class="container-jumbo">
            <img src="/images/jumbotron.jpg" alt="">
        </div>
    </nav>
</header>
