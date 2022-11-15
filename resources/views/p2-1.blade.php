@extends('template.main')

@section('title',"Présentation produit")

@section('content')

<div class="row gap-20 masonry pos-r">
    <div class="masonry-sizer col-md-12"></div>
    <div class="masonry-item col-md-12">
      <div class="bgc-white p-20 bd">
        <h3 class="c-grey-900">Présentation produit</h3>
        <p>Pour bien définir votre produit, vous devez identifier quelques éléments clés :</p>
<ol><li>Les segments de clientèle : groupes d’utilisateurs que vous ciblez.</li>
  <li>Le besoin de l’utilisateur : l’action qu’il doit faire et qui le pousse à rechercher un produit.</li>
    <li> L’objectif de l’utilisateur : l’objectif qu’il veut atteindre et qui le pousse à choisir votre produit.</li>
      <li>Les concurrents : autres produits qui permettent à un utilisateur d’effectuer la même action (c’est-à-dire de répondre au même besoin).</li>
        <li> Différenciateur / Proposition de valeur unique : comment votre produit se distingue des concurrents et quelles sont les caractéristiques qui aident spécifiquement les utilisateurs à atteindre leur objectif.</li></ol>
Dans un premier temps, nous allons travailler à identifier ces éléments pour pouvoir cerner votre projet en quelques mots!
      </div>
    </div>
    <div class="masonry-item col-md-12">
      <div class="bgc-white p-20 bd">
        <h3 class="c-grey-900">Remplir la fiche</h3>
        <div class="mT-30">
          <form action="{{route('p1.post')}}" method="POST">
            @csrf
            <div class="row">
              <div class="col-lg-12">
                <div class="mb-3">
                  <input type="texte" name="user_id" value="{{Auth::id()}}" style="display:none;">
                  <label class="form-label" for="exampleInputEmail1">Racontez comment vous avez identifié le problème auquel vous souhaitez apporter une solution.</label>
                  <textarea name="p2-1-1" id="" cols="30" rows="10" class="form-control" placeholder="Retrouvez-vous au moment où vous avez eu la première fois l'idée de votre projet. Qu'est ce qui en a été le déclencheur? Quel événement avez-vous constaté ou vécu dont les circonstances vous ont marqué? Quels ont été les personnes qui étaient impliquées? Quelles sont leurs caractéristiques? Essayez d'être le plus précis possible et donner des détails sur le contexte et le cadre!"></textarea>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="mb-3">
                  <label class="form-label" for="exampleInputEmail1">Décrire comment votre projet apporte une solution à ce problème</label><br><br>
                  <textarea name="p2-1-1" id="" cols="30" rows="10" class="form-control" placeholder="Vous avez pu formuler un projet avec votre idée savez maintenant de quelle manière elle va résoudre le problème identifié. Et précisément quelles catégories de personnes seront intéressées à utiliser votre produit ou service. "></textarea>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="mb-3">
                  <label class="form-label" for="exampleInputEmail1">Qu'apporte votre (vos) produit/service(s) de différents par rapport à ce qui existe déjà pour répondre au problème que vous avez identifié?</label>
                  <textarea name="p2-1-1" id="" cols="30" rows="10" class="form-control" placeholder="De votre historique, vous savez que d'une certaine façon d'autres solutions existent pour répondre au problème. Comment font vos cibles aujourd'hui s'ils sont confrontés à leur problème? Où vont-ils trouver leur solution?"></textarea>
                </div>
              </div>
              
              
            </div>
            











              <button type="submit" class="btn btn-primary btn-color">Valider</button>
          </form>
        </div>
      </div>
    </div>
    

@endsection