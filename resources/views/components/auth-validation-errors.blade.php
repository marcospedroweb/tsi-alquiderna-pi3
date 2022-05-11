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
                        <span class="mt-3">A senhas não são iguais.</span>
                    @elseif ($error === 'These credentials do not match our records.')
                        <span class="mt-3">O email e/ou senha não correspondem.</span>
                    @elseif ($error === 'The password must contain at least one uppercase and one lowercase letter')
                        <span class="mt-3">Sua senha deve ter ao menos letra minúsculas e uma maiúscula.</span>
                    @elseif ($error === 'The password requires at least one number.')
                        <span class="mt-3">A senha deve ter ao menos um numero.</span>
                    @else
                        <span class="mt-3">{{ $error }}</span>
                    @endif
                @endforeach
            </div>
        </div>

    </div>
@endif
