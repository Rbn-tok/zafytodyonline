@extends('template.main')

@section('title',"Enquête utilisateur")

@section('content')

<div class="row gap-20 masonry pos-r">
    <div class="masonry-sizer col-md-6"></div>
    <div class="masonry-item col-md-12">
      <div class="bgc-white p-20 bd">
        <h3 class="c-grey-900">Business model</h3>
        <p>Comment allez-vous faire pour vendre vos produits?</p>

            <ol><li>Identifier vos canaux de vente et distribution : facilement accessible pour votre cible et financièrement viable pour vous et votre cible (frais en connectivité si en ligne, frais logistiques associés,...)</li>
                <li>Catégoriser vos différents produits et les offres de prix associés selon vos cibles et le business model défini : Produit d’appel, produit principal, autres composantes …soyez cohérents avec les capacités de votre cible, la perception de valeur par rapport au prix du produit</li>
                    <li>Identifier par qui et comment les ventes sont gérées : les objectifs de vente doivent suivre les capacités des personnes impliquées le cas échéant ou doit être cohérent avec les activités marketing</li></ol>
            ATTENTION :<br>
            ⚠ Rester focus : trop de produits peut perdre votre cible<br>
            ⚠ Soyez clair dans votre offre : pour votre cible et les investisseurs éventuels”<br>
            
            <br>
        <p><b>Fichier à télécharger:</b> <a href="#">Template Business model canvas</a></p>
        <div class="mb-3">
          <label class="form-label" for="exampleInputEmail1">Mettre en ligne votre fichier ici</label>
          <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        
        <button type="submit" class="btn btn-primary btn-color">Valider</button>
      </form>
      </div>
    </div>


    
    
    

@endsection