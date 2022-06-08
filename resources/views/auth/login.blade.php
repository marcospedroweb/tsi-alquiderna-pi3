@extends('layouts.app')
@section('content')
    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />
    <div class="container-xxl mb-6 mt-5">
        <div class="row flex-column justify-content-center align-items-center rounded">
            <div class="col-4 rounded" id="div-login">
                <form method="POST" action="{{ route('login') }}" class="mb-4" id="form-register">
                    @csrf
                    <div class="text-center">
                        <h2 class="h2">Login</h2>
                    </div>
                    <div class="mb-3">
                        <x-label for="email" :value="__('Email')" class="form-label" />

                        <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" required />
                    </div>
                    <div class="mb-4">
                        <x-label for="password" :value="__('Senha')" class="form-label" />
                        <x-input id="password" class="form-control" type="password" name="password" required
                            autocomplete="new-password" minlength="8" maxlength="20" />
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Fazer login</button>
                    </div>
                </form>
                <span id="span-separator"></span>
                <div class="text-center" id="div-already-has-account">
                    <h2 class="mb-3">Ainda não possui uma conta?</h2>
                    <a href="{{ route('register') }}" class="btn btn-primary">Criar uma conta</a>
                </div>
            </div>
        </div>
    </div>
@endsection
