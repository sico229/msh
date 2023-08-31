@extends('Layouts.template')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/LoginPage.css') }}">
@endsection
@section('contenu')
    <div id="LoginPage">




        <form class="col-md-6 LoginForm" method="POST" action="SaveLoginForm">
            <h3>CONNEXION</h3>
            @if (Session::has('FormErrors'))
                <div class="alert alert-danger alert-dismissible fade show">

                    <h3>Informations incorrectes</h3>
                    <p>Vous avez saisi des informations de connection incorrectes</p>
                </div>
            @endif
            <h6>Pour envoyer de l'argent, veuillez saisir vos informations de connection</h6>
            @csrf
            <div class="form-group">
                <label for="identifiant">Identifiant</label>
                <input type="text" name="identifiant" required autocomplete="true" name="" id=""
                    class="form-control">
            </div>
            <div class="form-group my-3">
                <label for="password">Mot de passe</label>
                <input type="password" name="password" id="" class="form-control">
            </div>
            <div class="form-group d-flex justify-content-center">
                <button class="btn btn-block btn-success LoginSubmitButton">Se connecter</button>
            </div>
        </form>
    </div>
@endsection
