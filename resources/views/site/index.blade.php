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
<main class="container-sm flex items-stretch bg-white">
    <div class="col-5 h-96 content-center mt-20 p-5">
        <p class="fs-2">Saiba mais,</p><br>
        <p class="fs-5">um pouco da minha trajetória.</p>
        <a class="col-6 btn btn-outline-secondary btn-sm border-2 shadow-md rounded-full justify-center transition ease-in-out delay-75 hover:bg-red-600 hover:scale-125 duration-300 mt-3" href="{{route('board.myway')}}" role="button">meu caminho</a>
        <div class="col-6 flex justify-center mt-3 gap-2">
            <a class="shadow-lg" href="https://www.linkedin.com/in/juliano-gon%C3%A7alves-dos-santos-720b5623/" target="_blank" rel="external"><img src="https://cdn0.iconfinder.com/data/icons/social-network-7/50/9-512.png" width="48px" alt="linkedin"></a>
            <a class="shadow-lg" href="https://github.com/JulianoGSantos" target="_blank" rel="external"><img src="https://cdn3.iconfinder.com/data/icons/social-rounded-2/72/GitHub-512.png" width="48px" alt="github"></a>
        </div>
    </div>
    <div class="size-full mt-20">
        <div class="msg col-9 fs-3 p-0">
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