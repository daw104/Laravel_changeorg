@extends('layout.public')

@section('content')
<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500 ocultar-logo" />
                <img src="../imgs/logo.png"
                     style="width: 185px;" alt="logo">
            </a>
            <h4 class="mt-1 mb-5 pb-1">Somos ChangeOrg</h4>
        </x-slot>



        <!-- Formulario de Iniciar Sesion -->
        <section class="h-100 gradient-form" style="background-color: #eee;">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-xl-10">
                        <div class="card rounded-3 text-black">
                            <div class="row g-0">
                                <div class="col-lg-6">
                                    <div class="card-body p-md-5 mx-md-4">



                                        <form method="POST" action="{{ route('register') }}">
                                            @csrf
                                            <p class="text-center">Registrate</p>
                                            <p>¿Ya tienes cuenta?
                                                <a class="text-muted" href="{{url('login')}}">Iniciar Sesión</a>
                                            </p>

                                            <!--Name-->
                                            <div class="form-outline mb-4 pt-2">
                                                <x-input-label for="name" :value="__('')" />

                                                <x-text-input id="name"  type="text" name="name" :value="old('name')" placeholder="*Nombre" required autofocus />

                                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                            </div>

                                            <!--Email-->
                                            <div class="form-outline mb-4">
                                                <x-input-label for="email" :value="__('')" />

                                                <x-text-input id="email"  type="email" name="email" :value="old('email')" placeholder="*Email" required />

                                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                            </div>

                                            <!--Password-->
                                            <div class="form-outline mb-4">
                                                <x-input-label for="password" :value="__('')" />

                                                <x-text-input id="password"
                                                              type="password"
                                                              name="password"
                                                              placeholder="*Contraseña"
                                                              required autocomplete="new-password" />

                                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                            </div>

                                            <!--Confirm Password-->
                                            <div class="form-outline mb-4">
                                                <x-input-label for="password_confirmation" :value="__('')" />

                                                <x-text-input id="password_confirmation"
                                                              type="password"
                                                              name="password_confirmation"
                                                              placeholder="*Repetir Contraseña"
                                                              required />

                                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                            </div>

                                            <div class="text-center pt-1 mb-5 pb-1">

                                                <x-primary-button class="ml-4">
                                                    {{ __('Register') }}
                                                </x-primary-button>
                                            </div>


                                        </form>

                                    </div>
                                </div>
                                <div class="col-lg-6 d-flex align-items-center gradient-custom-2" style="background-image: url({{asset('../imgs/img-car-2.jpg')}}); background-repeat: round;">
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
