@extends('layouts.app')

@section('content')
<div>
    <div class="page main-signin-wrapper">
        <div class="signpages text-center row">
            <div class="col-md-12">
                <div class="card">
                    <div class="row-sm row">
                        <div class="d-none d-lg-block text-center bg-primary details col-xl-5 col-lg-6">
                            <div class="mt-5 pt-4 p-2 pos-absolute">
                                <img src="{{url('/images/ems-logo-white.png')}}" alt="Logo" class="header-brand-img mb-4">
                            
                                <div class="clearfix"></div>
                                <img src="{{url('/images/user-shield.png')}}" class="ht-100 mb-0" alt="user">
                                <h5 class="mt-4 text-white">Mamura Sensei</h5>
                                <span class="tx-white-6 tx-13 mb-5 mt-xl-0">
                                    Acesse o sistema de gestão da Escola de Musica de Sobral
                                </span>
                            </div>
                        </div>

                        <div class="login_form col-xl-7 col-lg-6 col-sm-12 col-12">
                            <div class="container-fluid">
                                <div class="row-sm row">
                                    <div class="mt-2 mb-2 card-body">
                                        <img src="{{url('/images/ems-logo.png')}}" alt="Logo" class="d-lg-none header-brand-img text-start">
                                        <div class="clearfix"></div>
                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf
                                            <h5 class="text-start mb-2">Login de acesso</h5>
                                            <p class="mb-4 text-muted tx-13 ms-0 text-start">
                                                Acesse o sistema de gestão da Escola de Musica de Sobral
                                            </p>
                                            <div class="text-start form-group">
                                                <label for="email" class="form-label">Email</label>
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="text-start form-group">
                                                <label for="password" class="form-label">Senha</label>
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <button:button class="btn ripple btn-main-primary btn-block mt-2 bt btn-primary">
                                                Login
                                            </button:button>
                                        </form>

                                        <div class="text-start mt-5 ms-0">
                                            <div class="mb-1">
                                                <a href="">Esqueceu a senha?</a>
                                            </div>

                                            <div>
                                                Não tem conta? <a href="#"> solicite seu acesso aqui!</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
