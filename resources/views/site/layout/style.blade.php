@vite(['resources/sass/app.scss','resources/js/app.js','resources/css/app.css'])
<header class="container-fluid p-3 mb-2 bg-body-secondary text-dark">
    @yield('top')
    <div class="row">
        <div class="col-6 ms-5 fs-5">
            /* Dev. Juliano Santos */
        </div>
        <div class="col">
            <div class="row">
                <div class="col-3 transition ease-in-out delay-75 text-center hover:text-red-600 hover:scale-150 duration-300"><a class=" fs-5" href="{{route('board.index')}}">Home</a></div>
                <div class="col-3 transition ease-in-out delay-75 text-center hover:text-red-600 hover:scale-150 duration-300"><a class=" fs-5" href="{{route('board.index')}}">Portifólio</a></div>
                <div class="col-3 transition ease-in-out delay-75 text-center hover:text-red-600 hover:scale-150 duration-300"><a class=" fs-5" href="{{route('board.index')}}">Sobre</a></div>
                <div class="col-3 transition ease-in-out delay-75 text-center hover:text-red-600 hover:scale-150 duration-300"><a class=" fs-5" href="{{route('board.index')}}">Contato</a></div>
            </div>
        </div>
    </div>
</header>
