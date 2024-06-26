<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Consultas</title>
    @extends('site.portifolio.system.client.layouts.app')
</head>
@section('content')
    <body>
        <form action="#">
            <div class="mt-5 text-xl">HISTÓRICO DE CONSULTAS</div>
            <div class="grid grid-cols-2 mt-5">
                <div class="grid mr-5">
                    <input type="search" name="search" id="isearch" placeholder="   busque um paciente" style="height: 35px" class=" form-control rounded-md ring-2 p-2 opacity-60">
                </div>
                <div class="mb-5 text-2xl">
                    <button type="submit" class="bg-red-400 ml-10 px-1 py-1 rounded-xl text-white text-lg ring-1">PESQUISAR</button>
                </div>
            </div>
        </form>
        <hr>
    </body>
@endsection
@section('footer')
    <footer>
        @section('footer')
    <footer>
        <div class="flex justify-center grid-cols-2">
            <div class="bg-blue-400 mt-2 mb-5 w-20 px-4 py-1 rounded-xl text-white ring-1"><a href="javascript:history.back()">voltar</a></div>
            <div class="bg-blue-400 ml-2 mt-2 mb-5 px-4 py-1 rounded-xl text-white ring-1"><a href="{{ route('start') }}">página inicial</a></div>
        </div>
    </footer>
@endsection
    </footer>
@endsection
</html>