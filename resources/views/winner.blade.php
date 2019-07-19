@extends('layouts.app')
@section('content')
    <!-- start banner Area -->
    <section class="banner-area relative">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row fullscreen align-items-center justify-content-between">
                <div class="col-lg-6 col-md-6 banner-left">
                    <h6 class="text-white">Con Autos-laravel</h6>
                    <h1 class="text-white">¡Mira si eres nuestro ganador!</h1>
                    <p class="text-white">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim
                    </p>
                    <!-- <a href="#" class="primary-btn text-uppercase">Get Started</a> -->
                </div>
                <div class="col-lg-5 col-md-6 banner-right">
                    <div class="card shadow">
                        <div class="card-body">
                            @if($user)
                            <h5 class="card-title">Ganador:</h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">{{$user->name}} {{$user->lastName}}</li>
                                <li class="list-group-item">{{$user->email}}</li>
                                <a href="/exportar" class="primary-btn text-uppercase"
                                value="Descargar Excel"><i class="fa fa-download"></i> Descargar Excel</a>
                            </ul>
                            @else
                            <h5 class="card-title">En este momento no contamos con tantos participantes</h5>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->
@endsection
