@vite(['resources/sass/app.scss','resources/js/app.js'])
<header class="container-fluid p-3 mb-2 bg-body-secondary text-dark">
    @yield('top')
    <div class="row">
        <div class="col-6 ms-5 fs-5">
            /* Dev. Juliano Santos */
        </div>
        <div class="col">
            <div class="row">
                <div class="col-3"><a class="icon-link icon-link-hover fs-5 link-underline-opacity-0" style="--bs-link-hover-color-rgb: 255, 0, 0;" href="{{route('board.index')}}">Home</a></div>
                <div class="col-3"><a class="icon-link icon-link-hover fs-5 link-underline-opacity-0" style="--bs-link-hover-color-rgb: 255, 0, 0;" href="{{route('board.index')}}">Portifólio</a></div>
                <div class="col-3"><a class="icon-link icon-link-hover fs-5 link-underline-opacity-0" style="--bs-link-hover-color-rgb: 255, 0, 0;" href="{{route('board.index')}}">Sobre</a></div>
                <div class="col-3"><a class="icon-link icon-link-hover fs-5 link-underline-opacity-0" style="--bs-link-hover-color-rgb: 255, 0, 0;" href="{{route('board.index')}}">Contato</a></div>
            </div>
        </div>
    </div>
</header>