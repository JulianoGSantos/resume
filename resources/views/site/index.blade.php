<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('site.layout.style')
    <title>Portifólio</title>
</head>
<body class="bg-white">
    @section('top')
    @endsection
</body>
<main class="container-sm flex items-stretch bg-white">
    <div class="col-5 h-96 content-center mt-20 p-5">
        <p class="fs-1">Bem-vindo,</p><br>
        <p class="fs-5">esse é meu website portifólio</p>
        <button class="col-6 btn btn-outline-secondary btn-sm border-2 shadow-md rounded-full justify-center transition ease-in-out delay-75 hover:bg-red-600 hover:scale-125 duration-300 mt-3">Meu caminho</button>
        <div class="col-6 flex justify-center mt-3 gap-2">
            <a class="shadow-lg" href="https://www.linkedin.com/in/juliano-gon%C3%A7alves-dos-santos-720b5623/" target="_blank" rel="external"><img src="https://cdn0.iconfinder.com/data/icons/social-network-7/50/9-512.png" width="48px" alt="linkedin"></a>
            <a class="shadow-lg" href="https://github.com/JulianoGSantos" target="_blank" rel="external"><img src="https://cdn3.iconfinder.com/data/icons/social-rounded-2/72/GitHub-512.png" width="48px" alt="github"></a>
        </div>
    </div>
    <div class="content-center size-full mt-20">
        <img src="img/portifolio.png" width="100%" alt="setup">
    </div>
</main>

</html>