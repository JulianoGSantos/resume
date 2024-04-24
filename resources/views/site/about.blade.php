<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('site.layout.style')
    <title>Sobre</title>
</head>
<body class="bg-white">
    @section('top')
    @endsection
    <div class="container-sm mt-20">
        <div class="hover:scale-110 hover:text-green-600 duration-300">Olá, sou Juliano Santos, desenvolvedor back-end. 
           Tenho experiência com desenvolvimento web e algum
           conhecimento em prospecção de clientes. 
        </div>
        <h1 class="mt-4">HISTÓRICO PROFISSIONAL</h1>
        <ul class=" list-disc">
            <li class=" hover:scale-110 hover:text-green-600 duration-300">
                Freelancer, home office
                Desenvolvedor Frontend
                Novembro de 2022 – Junho de 2023
                
                Projeto: brindes personalizados 
                O site oferecia opções de personalização  de brindes corporativos.
                Tecnologias: PHP, CSS, HTML, Docker, Git, Bootstrap.
            </li>
            <li class="mt-3 hover:scale-110 hover:text-green-600 duration-300">
                Freelancer, home office
                Desenvolvedor Fullstack
                Abril de 2023 – Presente

                Projeto: Sistema web de controle de dados 
                O site oferece um CRUD para uma clínica de fisioterapia.
                Tecnologias: PHP, CSS, HTML, Git, Tailwind

                Repositório do projeto: <a href="https://github.com/JulianoGSantos/system" target="_blank" rel="external" class=" hover:underline hover:text-blue-800 animate-pulse">github/system</a>
            </li>
        </u>
</body>
</html>