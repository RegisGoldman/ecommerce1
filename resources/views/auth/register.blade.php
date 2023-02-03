@extends('layouts.app')

@section('content')

<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/styles/contact_styles.css') }} ">
<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/styles/contact_responsive.css') }}">

        <div class="contact_form">
        <div class="container">
            <div class="row justify-content-center align-items-center">
            <div class="col-md-6" style="border: 1px solid grey; padding: 20px; border-radius: 25px;">
            <div class="contact_form_container">
                <div class="contact_form_title text-center">S'inscrire</div>

                <form action="{{ route('register') }}" id="contact_form" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nom & Prénoms</label>
                        <input type="text" class="form-control font-weight-light font-italic" name="name" aria-describedby="emailHelp" placeholder="Ex: Kouame David" required>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Téléphone</label>
                        <input type="text" class="form-control font-weight-light font-italic @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" aria-describedby="emailHelp" placeholder="Ex: +225 0101010101" required>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">E-mail</label>
                        <input type="text" class="form-control font-weight-light font-italic @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" aria-describedby="emailHelp" placeholder="Ex: example@gmail.com" required>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Mot de passe</label>
                        <input type="password" class="form-control font-weight-light font-italic" name="password" aria-describedby="emailHelp" placeholder="Ex: 0#$%^&*qwerZ" required>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Confirmez le mot de passe</label>
                        <input type="password" class="form-control font-weight-light font-italic" name="password_confirmation" aria-describedby="emailHelp" placeholder="Ex: 0#$%^&*qwerZ" required>
                    </div>

                    <div class="contact_form_button">
                        <button type="submit" class="btn btn-info">Inscription</button>
                    </div>
                </form>

            </div>
        </div>

        </div>
    </div>
    <div class="panel"></div>
    </div>

@endsection
