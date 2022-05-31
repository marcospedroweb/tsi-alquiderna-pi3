@extends('layouts.app')
@section('content')
    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />
    <div class="container-xxl mb-6 mt-5">
        <div class="row flex-column justify-content-center align-items-center rounded">
            <div class="col-4 rounded" id="div-register">
                <form method="POST" action="{{ route('register') }}" class="mb-4" id="form-register">
                    @csrf
                    <div class="text-center">
                        <h2 class="h2">Criar conta</h2>
                    </div>
                    <div class="mb-3">
                        <x-label for="name" :value="__('Nome')" class="form-label" />
                        <x-input id="name" class="form-control" type="text" name="name" :value="old('name')" required
                            autofocus />
                    </div>
                    <div class="mb-3">
                        <x-label for="email" :value="__('Email')" class="form-label" />

                        <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" required />
                    </div>
                    <div class="mb-3">
                        <x-label for="password" :value="__('Senha')" class="form-label" />
                        <x-input id="password" class="form-control" type="password" name="password" required
                            autocomplete="new-password" aria-describedby="passwordHelp" minlength="8" maxlength="20" />
                        <div id="passwordHelp" class="form-text">
                            <span class="d-block">Sua senha deve ter no mínimo 8 caracteres e no máximo 20 caracteres.</span>
                            <span class="d-block">Sua senha deve ter ao menos letra minúsculas e uma maiúscula.</span>
                        </div>
                    </div>
                    <div class="mb-4">
                        <x-label for="password_confirmation" :value="__('Confirme a senha')" class="form-label" />

                        <x-input id="password_confirmation" class="form-control" minlength="8" maxlength="20"
                            type="password" name="password_confirmation" required />
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Criar conta</button>
                    </div>
                </form>
                <span id="span-separator"></span>
                <div class="text-center" id="div-already-has-account">
                    <h2 class="mb-3">Já possui uma conta?</h2>
                    <a href="{{ route('login') }}" class="btn btn-primary">Fazer login</a>
                </div>
            </div>
        </div>
    </div>
@endsection
