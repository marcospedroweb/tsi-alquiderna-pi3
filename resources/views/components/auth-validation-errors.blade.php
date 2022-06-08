@props(['errors'])

@if ($errors->any())
    <div {{ $attributes }} class="container-xxl">
        <div class="alert alert-danger text-center">
            <div>
                <span class="fw-bold"> {{ __('Oops! Houve algum erro.') }}</span>
            </div>
            <div>
                @foreach ($errors->all() as $error)
                    @if ($error === 'The password confirmation does not match.')
                        <div>
                            <span class="mt-3">A senhas não são iguais.</span>
                        </div>
                    @elseif ($error === 'These credentials do not match our records.')
                        <div>
                            <span class="mt-3">O email e/ou senha não correspondem.</span>
                        </div>
                    @elseif ($error === 'The password must contain at least one uppercase and one lowercase letter.')
                        <div>
                            <span class="mt-3">Sua senha deve ter ao menos letra minúsculas e uma
                                maiúscula.</span>
                        </div>
                    @elseif ($error === 'The password requires at least one number.')
                        <div>
                            <span class="mt-3">A senha deve ter ao menos um numero.</span>
                        </div>
                    @elseif ($error === 'The email has already been taken.')
                        <div>
                            <span class="mt-3">Este email não está disponível.</span>
                        </div>
                    @else
                        <div>
                            <span class="mt-3">{{ $error }}</span>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>

    </div>
@endif
