<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('site.layout.style')
    <title>Juliano Santos</title>
</head>
<body class="bg-white">
    @section('top')
    @endsection
</body>
<main class="grid grid-cols-12 sm:text-sm md:text-base lg:text-lg bg-white">
    <div class="col-span-6 h-96 mt-36 p-5 ml-20">
        <p class="text-4xl">Saiba mais,</p><br>
        <p class="text-gray-500">um pouco da minha trajetória.</p>
        <a class="grid w-5/12 border-2 w-full mt-3 text-center text-gray-500 shadow-md rounded-full transition ease-in-out delay-75 hover:bg-red-600 hover:text-black hover:scale-150 duration-300" href="{{route('board.myway')}}" role="button">meu caminho</a>
        <div class="grid grid-cols-8 mt-3 ml-10">
            <a class="" href="https://www.linkedin.com/in/juliano-gon%C3%A7alves-dos-santos-720b5623/" target="_blank" rel="external"><img src="https://cdn0.iconfinder.com/data/icons/social-network-7/50/9-512.png" width="48px" alt="linkedin"></a>
            <a class="" href="https://github.com/JulianoGSantos" target="_blank" rel="external"><img src="https://cdn3.iconfinder.com/data/icons/social-rounded-2/72/GitHub-512.png" width="48px" alt="github"></a>
        </div>
    </div>
    <div class="col-span-6 mt-20">
        <div class="msg col-9 pr-0">
            Hello world, bem vindo ao meu portifólio.
        </div>
        <img src="img/portifolio.png" width="100%" alt="setup">
    </div>
</main>
<style>
    .msg{
        display: block;
        color: black;
        font-size: 1.5rem;
        font-weight: 700;

        border-right: 16px solid black;
        white-space: nowrap;

        overflow: hidden;

        animation: mark .5s step-end infinite, write 5s steps(55, end);
    }

    @keyframes mark{
        50%{
            border-right-color: transparent;
        }
    }

    @keyframes write{
        0%{
            width: 0%;
        }
    }
</style>
</html>