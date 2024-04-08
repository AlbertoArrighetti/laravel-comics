<nav>
    <div id="top-bar">
        <div class="container">
            <div>Dc power visa®</div>
            <div>additional dc sites ▼</div>
        </div>
    </div>
    <div id="nav">
        <div class="container">
            <div>
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo dc">
            </div>
            <div class="list">
                <ul class="mb-0">
                    <li><a href="#">characters</a></li>
                    <li><a href="{{route('home')}}">comics</a></li>
                    <li><a href="#">movies</a></li>
                    <li><a href="#">tv</a></li>
                    <li><a href="#">games</a></li>
                    <li><a href="#">collectibles</a></li>
                    <li><a href="#">videos</a></li>
                    <li><a href="#">fans</a></li>
                    <li><a href="#">news</a></li>
                    <li>
                        <a href="#">shop</a>
                        <i>▼</i>
                    </li>
                </ul>
            </div>
            <div class="searchbar">
                <input type="search" id="searchbar">
                <label for="searchbar">Search</label>
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
        </div>
    </div>
</nav>