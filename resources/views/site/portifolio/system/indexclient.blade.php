<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de clientes</title>
    @extends('site.portifolio.system.client.layouts.app')
</head>

@section('content')
    <body class=" sm:text-xs md:text-base lg:text-lg">
        <form action="#">
        @csrf
        <div>
            <div class="mt-5">CADASTRO DE PACIENTES</div>
            <div class="grid grid-cols-2">

                <div class="mt-2">
                    <label for="iname" class="font-semibold">Nome</label><br>
                    <input type="text" name="name" id="iname" style="height: 35px " class=" form-control @error('name') is invalid @enderror rounded-md ring-2  opacity-60" value=" {{ old('name')}}"><br>
                    @error('name')
                        <div class="invalid-feedback text-red-600">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="mt-2">
                    <label for="icpf" class="font-semibold">CPF</label><br>
                    <input type="text" name="cpf" id="icpf" style="height: 35px " class=" form-control @error('cpf') is invalid @enderror rounded-md ring-2 opacity-60" value="{{ old('cpf')}}" >
                    @error('cpf')
                    <div class="invalid-feedback text-red-600">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>

            <div class="grid grid-cols-2">
                <div class="mt-2">
                    <label for="iemail" class="font-semibold">E-mail</label><br>
                    <input type="text" name="email" id="iemail" style="height: 35px " class=" form-control @error('email') is invalid @enderror rounded-md ring-2 opacity-60" value="{{ old('email')}}">
                    @error('email')
                        <div class=" invalid-feedback text-red-600">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="mt-2">
                    <label for="ibirth" class="font-semibold">Nascimento</label><br>
                    <input type="date" name="birth" id="ibirth" style="height: 35px " class=" form-control @error('birth') is invalid @enderror rounded-md ring-2 opacity-60" value="{{ old('birth')}}">
                    @error('birth')
                        <div class=" invalid-feedback text-red-600">
                            {{$message}}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="mt-12 font-semibold text-sm">Endereço</div>
            <div class="grid grid-cols-2">

                    <div class="mt-2">
                        <label for="istreet" class="font-semibold">Rua</label><br>
                        <input type="text" name="street" id="istreet" style="height: 35px " class=" form-control @error('street') is invalid @enderror rounded-md ring-2 opacity-60" value="{{ old('street')}}"><br>
                        @error('street')
                            <div class=" invalid-feedback text-red-600">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                
                    <div class="mt-2">
                        <label for="inumber" class="font-semibold">Número</label><br>
                        <input type="text" name="number" id="inumber" style="height: 35px " class=" form-control @error('number') is invalid @enderror rounded-md ring-2 opacity-60" value="{{ old('number')}}"><br>
                        @error('number')
                            <div class="invalid-feedback text-red-600">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                
                    <div class="mt-2">
                        <label for="icomplement" class="font-semibold">Bairro/Complemento</label><br>
                        <input type="text" name="complement" id="icomplement" style="height: 35px " class=" form-control @error('complement') is invalid @enderror rounded-md ring-2 opacity-60" value="{{ old('complement')}}"><br>
                        @error('complement')
                            <div class="invalid-feedback text-red-600">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                
                    <div class="mt-2">
                        <label for="icity" class="font-semibold">Cidade</label><br>
                        <input type="text" name="city" id="icity" style="height: 35px " class="form-control @error('city') is invalid @enderror rounded-md ring-2 opacity-60" value="{{ old('city')}}"><br>
                        @error('city')
                            <div class="invalid-feedback text-red-600">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                
                    <div class="mt-2">
                        <label for="istate" class="font-semibold">Estado</label><br>
                        <input type="text" name="state" id="istate" style="height: 35px " class="form-control @error('state') is invalid @enderror rounded-md ring-2 opacity-60" value="{{ old('state')}}"><br>
                        @error('state')
                            <div class="invalid-feedback text-red-600">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                
                    <div class="mt-2">
                        <label for="icep" class="font-semibold">CEP</label><br>
                        <input type="text" name="cep" id="icep" style="height: 35px " class="form-control @error('cep') is invalid @enderror  rounded-md ring-2 opacity-60" value="{{ old('cep')}}"><br>
                        @error('cep')
                            <div class="invalid-feedback text-red-600">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                </div>
            
            <div class="mt-12 font-semibold text-sm">Telefone</div>    
            <div class="grid grid-cols-2">
                    
                <div>
                    <label for="icellphone" class="font-semibold">Celular</label><br>
                    <input type="text" name="cellphone" id="icellphone" style="height: 35px " class="form-control @error('cellphone') is invalid @enderror rounded-md ring-2 opacity-60" value="{{ old('cellphone')}}"><br>
                    @error('cellphone')
                        <div class="invalid-feedback text-red-600">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                
                <div>
                    <label for="icellphone2" class="font-semibold">Celular2</label><br>
                    <input type="text" name="cellphone2" id="icellphone2" style="height: 35px " class="form-control @error('cellphone2') is invalid @enderror rounded-md ring-2 opacity-60" value="{{ old('cellphone2')}}"><br>
                    @error('cellphone2')
                        <div class="invalid-feedback text-red-600">
                            {{$message}}
                        </div>
                    @enderror
                </div>
            </div>
        </div>
            
            <div class="mt-4 mb-5">
                <button type="submit" class="bg-red-400 px-4 py-1 rounded-xl text-white ring-1">Cadastrar</button>
            </div>
        </form>
        <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>
        
        <script>
            $('#icpf').mask('000.000.000-00', {reverse: true});
            $('#icep').mask('00000-000');
            $('#icellphone').mask('(00) 00000-0000');
            $('#icellphone2').mask('(00) 00000-0000');
        </script>
    </body>
@endsection

@section('footer')
    <footer>
        <div class="flex justify-center grid-cols-2">
            <div class="bg-blue-400 mt-2 mb-5 w-20 px-4 py-1 rounded-xl text-white ring-1"><a href="javascript:history.back()">voltar</a></div>
            <div class="bg-blue-400 ml-2 mt-2 mb-5 px-4 py-1 rounded-xl text-white ring-1"><a href="{{ route('start') }}">página inicial</a></div>
        </div>
    </footer>
@endsection
</html>