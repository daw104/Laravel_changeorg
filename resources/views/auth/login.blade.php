@extends('layout.public')

@section('content')
<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
            <img src="../imgs/logo.png"
                 style="width: 185px;" alt="logo">
            </a>
            <h4 class="mt-1 mb-5 pb-1">Somos ChangeOrg</h4>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />





        <section class="h-100 gradient-form" style="background-color: #eee;">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-xl-10">
                        <div class="card rounded-3 text-black">
                            <div class="row g-0">
                                <div class="col-lg-6">
                                    <div class="card-body p-md-5 mx-md-4">


                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf
                                            <p>Iniciar Sesion</p>
                                            <p>¿No tienes cuenta?
                                                <a class="text-muted" href="{{url('register')}}">Registrate</a>
                                            </p>

                                            <div class="form-outline mb-4 pt-2">
                                                <x-input-label for="email" :value="__('')" />

                                                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" placeholder="*Email" required autofocus />

                                                <x-input-error :messages="$errors->get('email')" class="mt-2" />

                                            </div>

                                            <div class="form-outline mb-4">
                                                <x-input-label for="password" :value="__('')" />

                                                <x-text-input id="password" class="block mt-1 w-full"
                                                              type="password"
                                                              name="password"
                                                              placeholder="*Contraseña"
                                                              required autocomplete="current-password" />

                                                <x-input-error :messages="$errors->get('password')" class="mt-2" />

                                            </div>


                                            <x-primary-button class="ml-3">
                                                {{ __('Log in') }}
                                            </x-primary-button>

                                            <div class="text-center pt-1 mb-5 pb-1">

                                                @if (Route::has('password.request'))
                                                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                                        {{ __('Forgot your password?') }}
                                                    </a>
                                                @endif
                                            </div>



                                        </form>

                                    </div>
                                </div>
                                <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                    <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                        <h4 class="mb-4">La plataforma mundial para el cambio</h4>
                                        <p class="small mb-0">
                                            495.261.374 personas que pasan a la acción</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </x-auth-card>
</x-guest-layout>

@endsection
