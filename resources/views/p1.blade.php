@extends('template.main')

@section('title',"Enregistrement de l'information de votre startup")

@section('content')

<div class="row gap-20 masonry pos-r">
    <div class="masonry-sizer col-md-6"></div>
    <div class="masonry-item col-md-12">
      <div class="bgc-white p-20 bd">
        <h3 class="c-grey-900">Enregistrement d'information de votre startup</h3>
        <div class="mT-30">
          <form action="{{route('startup.post')}}" method="POST">
            @csrf

            <div class="row">
              <div class="col-lg-12">
                <div class="mb-3">
                  <input type="texte" name="user_id" value="{{Auth::id()}}" style="display:none;">
                  <label class="form-label" for="exampleInputEmail1" style="font-weight: 600;">Nom de la startup</label>
                  <input type="texte" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" name="nom">
                </div>
              </div>
              <div class="col-lg-12">
                <div class="mb-3">
                  <label class="form-label" for="exampleInputEmail1" style="font-weight: 600;">Lien de votre site web</label>
                  <input type="texte" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" name="site_web">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="mb-3">
                  <label class="form-label" for="exampleInputEmail1"  style="font-weight: 600;">Lien de la page Facebook associé(e) au projet</label>
                  <input type="texte" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" name="facebook">
                </div>
              </div>
            </div>
            <div class="row">
                <div class="col-lg-12"><label class="form-label" for="exampleInputEmail1" style="font-weight: 600 !important;">Quel en est le statut juridique?</label></div>
                
            <div class="col-lg-4">
              
              <div class="form-check">
                <label class="form-label form-check-label">
                  <input class="form-check-input" type="radio" name="statut_juridique" id="gridRadios1" value="Entreprise Individuelle" >
                  Entreprise Individuelle (EI)
                </label>
              </div>
              <div class="form-check">
                <label class="form-label form-check-label">
                  <input class="form-check-input" type="radio" name="statut_juridique" id="gridRadios1" value="Société à Responsabilité Limitée" >
                  Société à Responsabilité Limitée (SARL/SARLU)
                </label>
              </div>
              <div class="form-check">
                <label class="form-label form-check-label">
                  <input class="form-check-input" type="radio" name="statut_juridique" id="gridRadios1" value="Société Anonyme" >
                  Société Anonyme (SA/SAU)
                </label>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-check">
                <label class="form-label form-check-label">
                  <input class="form-check-input" type="radio" name="statut_juridique" id="gridRadios1" value="Association" >
                  Association
                </label>
              </div><div class="form-check">
                <label class="form-label form-check-label">
                  <input class="form-check-input" type="radio" name="statut_juridique" id="gridRadios1" value="Coopérative" >
                  Coopérative
                </label>
              </div>
              <div class="form-check">
                <label class="form-label form-check-label">
                  <input class="form-check-input" type="radio" name="statut_juridique" id="gridRadios1" value="Informel" >
                  Informel
                </label>
              </div>
            </div>
            
              <div class="col-lg-12">
                <br>
                <label class="form-label" for="exampleInputEmail1" style="font-weight: 600 !important;">
                  Depuis combien de temps avez-vous travaillé sur ce projet?
                </label>
              </div>
            
          <div class="col-lg-12">
            
            <div class="form-check">
              <label class="form-label form-check-label">
                <input class="form-check-input" type="radio" name="date_creation" id="gridRadios1" value="moins de 6 mois" >
                moins de 6 mois
              </label>
            </div>
            <div class="form-check">
              <label class="form-label form-check-label">
                <input class="form-check-input" type="radio" name="date_creation" id="gridRadios1" value="6 mois à 1 an" >
                6 mois à 1 an
              </label>
            </div>
            <div class="form-check">
              <label class="form-label form-check-label">
                <input class="form-check-input" type="radio" name="date_creation" id="gridRadios1" value="1 à 2 ans" >
                1 à 2 ans
              </label>
            </div>
            <div class="form-check">
              <label class="form-label form-check-label">
                <input class="form-check-input" type="radio" name="date_creation" id="gridRadios1" value="Plus de 2 ans" >
                Plus de 2 ans
              </label>
            </div>
          </div>
        
            <div class="col-lg-12">
                <br><label class="form-label" for="exampleInputEmail1" style="font-weight: 600 !important;">Ces personnes qui participent à votre projet sont-elles rémunérées? </label>
                
                
                    <div class="form-check">
                        <label class="form-label form-check-label">
                          <input class="form-check-input" type="radio" name="remuneration" id="gridRadios1" value="oui" >
                          Oui
                        </label>
                      </div>
                
                
                <div class="form-check">
                  <label class="form-label form-check-label">
                    <input class="form-check-input" type="radio" name="remuneration" id="gridRadios1" value="non" >
                    Non
                  </label>
                </div>
                <br>
                <label class="form-label" for="exampleInputEmail1" style="font-weight: 600;">Si oui, pouvez-vous préciser l'origine des fonds?</label>
              <div class="form-check">
                <label class="form-label form-check-label">
                  <input class="form-check-input" type="checkbox" name="fond[]" id="gridRadios1" value="Financement extérieur reçu" >
                  Financement extérieur reçu (inclus prêts et dettes)
                </label>
              </div>
              <div class="form-check">
                <label class="form-label form-check-label">
                  <input class="form-check-input" type="checkbox" name="fond[]" id="gridRadios1" value="Fonds des associés" >
                  Fonds des associés (apport sur compte courant)
                </label>
              </div>
              <div class="form-check">
                <label class="form-label form-check-label">
                  <input class="form-check-input" type="checkbox" name="fond[]" id="gridRadios1" value="Chiffre d'affaires de l'entreprise" >
                  Chiffre d'affaires de l'entreprise
                </label>
              </div>
              </div>
        </div>
           
            </div>
            
            









            

    






<br>
        <div class="row">
            <div class='col-lg-12'><label class="form-label" for="exampleInputEmail1" style="font-weight: 600;">A quel(s) Objectif(s) de Développement Durable votre projet contribue-t-il?
            </label></div>
            <div class="col-lg-4">
            
            <div class="form-check">
                <label class="form-label form-check-label">
                <input class="form-check-input" type="checkbox" name="odd[]" id="gridRadios1" value="Éradication de la pauvreté" >
                Éradication de la pauvreté
                </label>
            </div>
            <div class="form-check">
                <label class="form-label form-check-label">
                <input class="form-check-input" type="checkbox" name="odd[]" id="gridRadios1" value="Lutte contre la faim" >
                Lutte contre la faim
                </label>
            </div>
            <div class="form-check">
                <label class="form-label form-check-label">
                <input class="form-check-input" type="checkbox" name="odd[]" id="gridRadios1" value="Accès à la santé" >
                Accès à la santé
                </label>
            </div>
            <div class="form-check">
                <label class="form-label form-check-label">
                <input class="form-check-input" type="checkbox" name="odd[]" id="gridRadios1" value="Accès à une éducation de qualité" >
                Accès à une éducation de qualité
                </label>
            </div>
            <div class="form-check">
                <label class="form-label form-check-label">
                <input class="form-check-input" type="checkbox" name="odd[]" id="gridRadios1" value="Égalité entre les sexes" >
                Égalité entre les sexes
                </label>
            </div>
            <div class="form-check">
                <label class="form-label form-check-label">
                <input class="form-check-input" type="checkbox" name="odd[]" id="gridRadios1" value="Accès à l'eau salubre et à l'assainissement" >
                Accès à l'eau salubre et à l'assainissement
                </label>
            </div>

            <div class="form-check">
                <label class="form-label form-check-label">
                <input class="form-check-input" type="checkbox" name="odd[]" id="gridRadios1" value="Recours aux énergies renouvelables" >
                Recours aux énergies renouvelables
                </label>
            </div>
            <div class="form-check">
                <label class="form-label form-check-label">
                <input class="form-check-input" type="checkbox" name="odd[]" id="gridRadios1" value="Accès à des emplois décents" >
                Accès à des emplois décents
                </label>
            </div>

            
            
            
            
            </div>
            <div class="col-lg-6">
            <div class="form-check">
                <label class="form-label form-check-label">
                <input class="form-check-input" type="checkbox" name="odd[]" id="gridRadios1" value="Bâtir une infrastructure résiliente" >
                Bâtir une infrastructure résiliente
                </label>
            </div>
            <div class="form-check">
                <label class="form-label form-check-label">
                <input class="form-check-input" type="checkbox" name="odd[]" id="gridRadios1" value="Réduction des inégalités" >
                Réduction des inégalités
                </label>
            </div>
            <div class="form-check">
                <label class="form-label form-check-label">
                <input class="form-check-input" type="checkbox" name="odd[]" id="gridRadios1" value="Villes et communautés durables" >
                Villes et communautés durables
                </label>
            </div>
            <div class="form-check">
                <label class="form-label form-check-label">
                <input class="form-check-input" type="checkbox" name="odd[]" id="gridRadios1" value="Consommation et production responsables" >
                Consommation et production responsables
                </label>
            </div>
            <div class="form-check">
                <label class="form-label form-check-label">
                <input class="form-check-input" type="checkbox" name="odd[]" id="gridRadios1" value="Lutte contre le changement climatique" >
                Lutte contre le changement climatique
                </label>
            </div>
            <div class="form-check">
                <label class="form-label form-check-label">
                <input class="form-check-input" type="checkbox" name="odd[]" id="gridRadios1" value="Vie aquatique" >
                Vie aquatique
                </label>
            </div>
            <div class="form-check">
                <label class="form-label form-check-label">
                <input class="form-check-input" type="checkbox" name="odd[]" id="gridRadios1" value="Vie terrestre" >
                Vie terrestre
                </label>
            </div>
            <div class="form-check">
                <label class="form-label form-check-label">
                <input class="form-check-input" type="checkbox" name="odd[]" id="gridRadios1" value="Justice et paix" >
                Justice et paix
                </label>
            </div>
            </div>
        </div>
            











<br><br>

              <button type="submit" class="btn btn-primary btn-color">Valider</button>
          </form>
        </div>
      </div>
      
    </div>
@endsection