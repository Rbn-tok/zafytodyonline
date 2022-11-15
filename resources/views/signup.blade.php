@extends('template.sign')

@section('title', 'Inscription')

@section('content')
	<div class="peer peer-greed h-100 pos-r bgr-n bgpX-c bgpY-c bgsz-cv" style="background-image:url(assets/static/images/bg.jpg)">
        <div class="pos-a centerXY">
            <div class="bgc-white bdrs-50p pos-r" style="width:120px;height:120px"><img class="pos-a centerXY" src="assets/static/images/logo.png" alt=""></div>
        </div>
    </div>
    <div class="col-12 col-md-4 peer pX-40 pY-80 h-100 bgc-white scrollable pos-r" style="min-width:320px">
        <h4 class="fw-300 c-grey-900 mB-40">Inscription sur Zafytody.online</h4>
        <form>
            <div class="form-group">
                <label class="text-normal text-dark">Nom</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label class="text-normal text-dark">Adresse email</label>
                <input type="email" class="form-control">
            </div>
            <div class="form-group">
                <label class="text-normal text-dark">Numéro téléphone</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label class="text-normal text-dark">Mot de passe</label>
                <input type="password" class="form-control">
            </div>
            <div class="form-group">
                <label class="text-normal text-dark">Retaper mot de passe</label>
                <input type="password" class="form-control">
            </div>
            <div class="form-group">
                <button class="btn btn-primary">S'inscrire</button>
            </div>
        </form>
    </div>
@endsection