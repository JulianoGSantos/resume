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
    <div class="container-sm">
        <div class="row justify-center mt-10 fs-2">
            Projetos
        </div>
        <div class="grid grid-cols-3 mt-5 border border-5 rounded-lg p-10">
            <a href="{{route('start')}}" target="_blank" rel="external"><img src="img/telasystem.png" class=" bg-white h-56 w-6/12 border-2 border-white opacity-100 hover:opacity-100 hover:scale-150 delay-300 hover:transition-transform duration-700 mx-auto rounded-md shadow-[0_0_30px_theme('colors.red.800')]"></a>
            <a href="{{route('index.question')}}" target="_blank" rel="external"><img src="img/question.png" class=" bg-white h-56 w-6/12 border-2 border-white opacity-100 hover:opacity-100 hover:scale-150 delay-300 hover:transition-transform duration-700 mx-auto rounded-md shadow-[0_0_30px_theme('colors.red.800')]"></a>
            <a href="{{route('index.commerce')}}" target="_blank" rel="external"><img src="img/commerce.png" class=" bg-white h-56 w-6/12 border-2 border-white opacity-100 hover:opacity-100 hover:scale-150 delay-300 hover:transition-transform duration-700 mx-auto rounded-md shadow-[0_0_30px_theme('colors.red.800')]"></a>
        </div>
        <div class="h-1/6 w-6/12 fs-5 mx-auto text-center mt-5">
            clique para detalhes
        </div>
    </div>
</body>
</html>