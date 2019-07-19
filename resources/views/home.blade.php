@extends('layouts.app')
@section('content')
			<!-- start banner Area -->
			<section class="banner-area relative">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row fullscreen align-items-center justify-content-between">
						<div class="col-lg-6 col-md-6 banner-left">
							<h6 class="text-white">Con Autos-laravel</h6>
							<h1 class="text-white">regístrate y gana</h1>
							<p class="text-white">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
							</p>
							<!-- <a href="#" class="primary-btn text-uppercase">Get Started</a> -->
						</div>
						<div class="col-lg-5 col-md-6 banner-right">
                            <register-component></register-component>
						</div>
					</div>
				</div>
			</section>
			<!-- End banner Area -->
@endsection
