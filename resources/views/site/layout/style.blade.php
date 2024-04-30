@vite(['resources/sass/app.scss','resources/js/app.js','resources/css/app.css'])
<header class=" bg-gray-200 p-3 mb-2 text-black">
    @yield('top')
    <div class="grid grid-cols-12 sm:text-sm md:text-base lg:text-lg">
        <div class="col-span-6 ml-10">
            /* Dev. Juliano Santos */
        </div>
        <div class="grid grid-cols-8 gap-20">
            <div class="col-span-2 transition ease-in-out delay-75 text-center hover:text-red-600 hover:scale-150 duration-300"><a href="{{route('board.index')}}">Home</a></div>
            <div class="col-span-2 transition ease-in-out delay-75 text-center hover:text-red-600 hover:scale-150 duration-300"><a href="{{route('board.portifolio')}}">Portifólio</a></div>
            <div class="col-span-2 transition ease-in-out delay-75 text-center hover:text-red-600 hover:scale-150 duration-300"><a href="{{route('board.about')}}">Sobre</a></div>
            <div class="col-span-2 transition ease-in-out delay-75 text-center hover:text-red-600 hover:scale-150 duration-300"><a href="{{route('board.contact')}}">Contato</a></div>
        </div>
    </div>
</header>
