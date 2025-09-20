<header class="custom-header">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center" href="/">
                <img src="{{ asset('img/logo.svg') }}" alt="Logo do RPG-HUB" style="height: 3rem;">
                <img src="{{ asset('img/RPG-HUB.svg') }}" alt="Texto RPG-HUB" style="height: 1.5rem; margin-left: 0.5rem;">
            </a>
            
            @yield('header-content')

        </div>
    </nav>
</header>