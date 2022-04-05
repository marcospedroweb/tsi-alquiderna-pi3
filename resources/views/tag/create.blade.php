@extends('layouts.app')
@section('content')
    <form action="{{ route('tag.store') }}" method="POST">
        @csrf
        <!-- Cria uma token para a pessoa que acessou a pagina, impedindo que o formulario seja submetido por algum que não acessou a pagina, evitando bots-->
        <div>
            Nome da tag <input type="text" name="name">
        </div>
        <button type="submit">ENVIAR</button>
    </form>
@endsection
