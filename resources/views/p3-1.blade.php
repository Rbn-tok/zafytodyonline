@extends('template.main')

@section('title',"Définir le contexte")

@section('content')

<div class="row gap-20 masonry pos-r">
    <div class="masonry-sizer col-md-6"></div>
    <div class="masonry-item col-md-12">
      <div class="bgc-white p-20 bd">
        <h3 class="c-grey-900">Définir le contexte</h3>
        <p>descriptif concept Zafy Tody</p>

      </div>
    </div>
    <div class="masonry-item col-md-12">
        <div class="bgc-white p-20 bd">
          <h4 class="c-grey-900">Cadre du projet</h4>
          <p>Poser le contexte > Valider avec des données : L’occurrence du problème (où, à qui, cela représente combien ou quel pourcentage de personnes?)<br>
            Les sources du problème            (cela arrive à cause de quoi? quelles statistiques?)<br>
            Le potentiel d’évolution (ça ira mieux...pourquoi? ça ira pire… pourquoi? en quoi l’évolution favorise le projet?)”<br>
            Présenter votre solution > “Définir clairement quel est le produit et/ou le service, ses caractéristiques. Montrez celles qui apportent une résolution au problème identifié. Précisez tous autres avantages/bénéfices.<br>
            ATTENTION :  ❌  ce n’est pas une présentation de vos produits ❌ ce n’est pas une théorie </p>
            <div class="mb-3">
                <label class="form-label" for="exampleInputEmail1"></label>
                <textarea name="" id="" cols="30" rows="10" class="form-control" ></textarea>
              </div>
        </div>
      </div>
      <div class="masonry-item col-md-12">
        <div class="bgc-white p-20 bd">
          <h4 class="c-grey-900">Valorisation segment clientèle</h4>
          <p>“On ne vend pas à tout le monde > votre marché doit correspondre à votre contexte. Votre présentation doit répondre à quelques questions simples : Pour qui ma solution est-elle destinée (précisez s’il s’agit d’individus/ de société/d’organisation, leur âge, leur taille, leur revenus, précisez le secteur d’activité si pertinent, …) / Où se trouve cette cible? / Quel chiffre global cela représente? Si vous avez plusieurs cibles, précisez quelles proportions de chaque vous visez (ex : 70% individus, 30% PMEs)”</p>
            <div class="mb-3">
                <label class="form-label" for="exampleInputEmail1"></label>
                <textarea name="" id="" cols="30" rows="10" class="form-control" ></textarea>
              </div>
        </div>
      </div>
      <div class="masonry-item col-md-12">
        <div class="bgc-white p-20 bd">
          <h4 class="c-grey-900">Concurrence </h4>
          <p>Alternatives actuelles<br>
            “Présentez quelle est la réponse au problème que vos cibles appliquent actuellement / Définissez les différents types de concurrents et préciser leurs caractéristiques, donnez des exemples pour le type de concurrents”<br>
            Nos avantages<br>
            “Ne traitez pas vos concurrents comme une seule entité, vous devez identifier votre élément de différenciation pour chaque type de concurrents : Lister les principales caractéristiques de votre solution et montrer celles que ne possèdent pas chaque type OU Mettre directement votre avantages par rapport à chaque type de concurrent si celui-ci a été bien présenté”</p>
            <div class="mb-3">
                <label class="form-label" for="exampleInputEmail1"></label>
                <textarea name="" id="" cols="30" rows="10" class="form-control" ></textarea>
              </div>
<br>
              <button type="submit" class="btn btn-primary btn-color">Valider</button>
        </div>
      </div>
    </div>





@endsection
