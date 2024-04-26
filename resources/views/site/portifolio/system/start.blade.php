<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @extends('site.portifolio.system.client.layouts.home')
</head>
<body>
    <header>
        <div class=" grid justify-center w-full h-32 content bg-blue-400 p-12">
            <div class="min-[200px]:text-center sm:text-xs md:text-4xl lg:text-4xl">CONTROLE DE DADOS PACIENTES</div>
        </div>
    </header>
    <main>
        <div class="w-screen h-96 min-[200px]:text-xs min-[200px]:text-center grid grid-cols-3 justify-items-center">
            <div class="grid h-3 mt-14"><img src="https://cdn0.iconfinder.com/data/icons/medical-4/512/medical_history-512.png" alt="paciente" width="192px"></div>
            <div class="grid h-3 mt-14"><img src="https://cdn1.iconfinder.com/data/icons/luchesa-2/128/Search_document-512.png" alt="buscar" width="192px"></div>
            <div class="grid h-3 mt-14"><img src="https://cdn4.iconfinder.com/data/icons/sport-fitness-vol-4-1/512/exercise_plan_calendar_schedule-512.png" alt="calendario" width="192px"></div>
            <div class=" hover:text-blue-200 hover:scale-125 sm:text-xs md:text-base lg:text-lg"><a href=" {{ route ('index.client') }}"><div class="grid mt-44 p-1 text-center bg-slate-400 h-8 rounded-lg ring-2">CADASTRAR PACIENTE</div></a></div>
            <div class=" hover:text-blue-200 hover:scale-125 sm:text-xs md:text-base lg:text-lg"><a href=" {{ route('search.client') }}"><div class="grid mt-44 p-1 text-center bg-slate-400 h-8 rounded-lg ring-2">BUSCAR PACIENTE</div></a></div>
            <div class=" hover:text-blue-200 hover:scale-125 sm:text-xs md:text-base lg:text-lg"><a href=" {{ route('search.event') }}"><div class="grid mt-44 p-1 text-center bg-slate-400 h-8 rounded-lg ring-2">BUSCAR CONSULTA</div></a></div>
        </div>
    </main>
    <footer>
            @csrf
            <div class=" grid mt-4 justify-items-center w-full h-28 bg-black">
                <a href=" {{ route('board.portifolio') }}" class=" w-16 h-6 mt-10 bg-red-400 rounded-sm text-center text-white">Sair</a>
            </div>
    </footer>
</body>
</html>