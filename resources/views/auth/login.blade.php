@extends('layouts.app')

@section('content')

<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/styles/contact_styles.css') }} ">
<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/styles/contact_responsive.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/styles/login_user.css') }}">

        <div id="login">
        <div class="contact_form">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-6" style="border: 1px solid black; padding: 20px;">
                        <div class="contact_form_container">
                            <div class="text-center display-4">Se connecter</div> <br>
    
                            <form action="{{ route('login') }}" id="contact_form" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">E-mail ou Téléphone</label>
                                    <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" aria-describedby="emailHelp" required>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Mot de passe</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" aria-describedby="emailHelp" required>

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                </div>

                                <div class="contact_form_button">
                                    <button type="submit" class="btn btn-info">Connexion</button>
                                </div>
                            </form>
                            <br>

                            <a href="{{ route('password.request') }}"> Mot de passe oublié ? </a> <br> <br>


                            <a href="{{ url('/auth/redirect/facebook') }}" class="btn btn-primary btn-block social_icon"><i class="fab fa-facebook-square fa-lg"></i> Connectez-vous avec Facebook</a>
                            <a href="{{ url('/auth/redirect/google') }}" class="btn btn-danger btn-block social_icon"><i class="fab fa-google-plus fa-lg"></i> Connectez-vous avec Google</a>
    
                        </div>
                    </div>


                </div>
            </div>
            <div class="panel"></div>
        </div>
    </div>


@endsection
