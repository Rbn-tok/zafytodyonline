{{--
@extends('template.main')

@section('title',"Enquête utilisateur")

@section('content')

<div class="row gap-20 masonry pos-r">
    <div class="masonry-sizer col-md-6"></div>
    <div class="masonry-item col-md-12">
    <form action="{{route('file.upload.postP2-3')}}" method="post" enctype="multipart/form-data">
        @csrf
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <strong>{{ $message }}</strong>
        </div>
      @endif
      @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif
        <div class="bgc-white p-20 bd">
        <h3 class="c-grey-900">Enquête utilisateur</h3>
        <p>Soyez sur de a validité de votre projet en effectuant une petite enquete auprès de vos segments clientèle. Nous demandons au moins d'avoir 30 réponses</p>
        <p>Fichier à télécharger: <a href="#">template Excel à remplir</a></p>
        <div class="mb-3">
          <label class="form-label" for="exampleInputEmail1">Une fois rempli, mettre en ligne votre fichier ici</label>
          <input type="file" name="file" class="custom-file-input" id="chooseFile"" aria-describedby="emailHelp">
        </div>

        <button type="submit" name="submit" class="btn btn-primary btn-color" for="chooseFile">Valider</button>
      </form>
      </div>
    </div>
  </div>







@endsection

--}}


@extends('template.main')

@section('title',"Enquête utilisateur")

@section('content')
<!--
<div class="row gap-20 masonry pos-r">
    <div class="masonry-sizer col-md-12"></div>
    <div class="masonry-item col-md-12">
      <div class="bgc-white p-20 bd">
        <h3 class="c-grey-900">User Personna</h3>
        <p>Un persona est un personnage fictif créé pour représenter un type d’utilisateur pour un segment de clientèle. Les personas permettent de se concentrer sur ce que les utilisateurs veulent. Parler de segments de clients généraux comme “étudiants”, “couples”, “locaux” crée une distance avec les utilisateurs qui ont plutôt tendance à s'identifier à des personas qui leurs seraient présentés et qui leur correspondraient. Il peut aussi y avoir un Anti-persona représentant le segment de clientèle que vous ne voulez pas   si vous travaillez sur un produit pour des experts par exemples. Enfin, retenez que 1 segment clientèle = 1 persona et que le persona est aussi utile pur votre plan parketing</p>
      </div>
    </div>
    <div class="masonry-item col-md-12">
      <div class="bgc-white p-20 bd">
        <h3 class="c-grey-900">Créer vos personnas</h3>
        <div class="mT-30">
          <form>

              <div class="col-lg-12">
                <div class="mb-3">
                  <label class="form-label" for="exampleInputEmail1">Qui bénéficiera le plus de votre solution?</label>
                  <textarea name="" id="" cols="30" rows="10" class="form-control" ></textarea>
                </div>
              </div>

              <div class="col-lg-8">
                <label class="form-label" for="exampleInputEmail1">Tranche d'age</label>
                <div class="form-check">
                  <label class="form-label form-check-label">
                    <input class="form-check-input" type="radio" name="statut_juridique[]" id="gridRadios1" value="Entreprise Individuelle" >
                    Entreprise Individuelle (EI)
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-label form-check-label">
                    <input class="form-check-input" type="radio" name="statut_juridique[]" id="gridRadios1" value="Société à Responsabilité Limitée" >
                    Société à Responsabilité Limitée (SARL/SARLU)
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-label form-check-label">
                    <input class="form-check-input" type="radio" name="statut_juridique[]" id="gridRadios1" value="Société Anonyme" >
                    Société Anonyme (SA/SAU)
                  </label>
                </div>
              </div>
              <div class="col-lg-8">
                <br>
                <label class="form-label" for="exampleInputEmail1">Tranche d'age</label>
                <div class="form-check">
                  <label class="form-label form-check-label">
                    <input class="form-check-input" type="radio" name="statut_juridique[]" id="gridRadios1" value="Entreprise Individuelle" >
                    Lycéen et plus jeune
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-label form-check-label">
                    <input class="form-check-input" type="radio" name="statut_juridique[]" id="gridRadios1" value="Société à Responsabilité Limitée" >
                    Etudiant
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-label form-check-label">
                    <input class="form-check-input" type="radio" name="statut_juridique[]" id="gridRadios1" value="Société Anonyme" >
                    Professionel
                  </label>
                </div>
                <div class="form-check">
                    <label class="form-label form-check-label">
                      <input class="form-check-input" type="radio" name="statut_juridique[]" id="gridRadios1" value="Société Anonyme" >
                      Retraité
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="form-label form-check-label">
                      <input class="form-check-input" type="radio" name="statut_juridique[]" id="gridRadios1" value="Société Anonyme" >
                      Expatrié
                    </label>
                  </div>
              </div>
        </div>











<br>
              <button type="submit" class="btn btn-primary btn-color">Valider</button>
          </form>
        </div>
      </div>
    </div>

  -->
{{--
  <div class="row gap-20 masonry pos-r">
    <div class="masonry-sizer col-md-6"></div>
    <div class="masonry-item col-md-12">

    <form action="{{ route('file.upload.post') }}" method="POST" enctype="multipart/form-data">
        @csrf
      <div class="bgc-white p-20 bd">
        <h3 class="c-grey-900">User Personna</h3>
        <p>Un persona est un personnage fictif créé pour représenter un type d’utilisateur pour un segment de clientèle. Les personas permettent de se concentrer sur ce que les utilisateurs veulent. Parler de segments de clients généraux comme “étudiants”, “couples”, “locaux” crée une distance avec les utilisateurs qui ont plutôt tendance à s'identifier à des personas qui leurs seraient présentés et qui leur correspondraient. Il peut aussi y avoir un Anti-persona représentant le segment de clientèle que vous ne voulez pas   si vous travaillez sur un produit pour des experts par exemples. Enfin, retenez que 1 segment clientèle = 1 persona et que le persona est aussi utile pur votre plan parketing</p>
      <p>Fichier à télécharger: <a href="#">template Excel à remplir</a></p>
        <div class="mb-3">
          <label class="form-label" for="exampleInputEmail1">Une fois rempli, mettre en ligne votre fichier ici</label>
          <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <button type="submit" class="btn btn-primary btn-color">Valider</button>

            </div>
    </form>
        </div>

  </div> --}}


    <div class="row gap-20 masonry pos-r">
    <div class="masonry-sizer col-md-6"></div>
    <div class="masonry-item col-md-12">
        <form action="{{route('file.upload.postP2-3')}}" method="post" enctype="multipart/form-data">
            <h3 class="text-center mb-5">Enquête utilisateur</h3>
              @csrf
              @if ($message = Session::get('success'))
              <div class="alert alert-success">
                  <strong>{{ $message }}</strong>
              </div>
            @endif
            @if (count($errors) > 0)
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
            @endif

            <div class="bgc-white p-20 bd">
                <h3 class="c-grey-900">Enquête utilisateur</h3>
                <p>Soyez sur de a validité de votre projet en effectuant une petite enquete auprès de vos segments clientèle. Nous demandons au moins d'avoir 30 réponses</p>
                <p>Fichier à télécharger: <a href="#">template Excel à remplir</a></p>
              <div class="custom-file">
                  <input type="file" name="file" class="custom-file-input" id="chooseFile">
                  <label class="custom-file-label" for="chooseFile">Select file</label>
              </div>
              <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">
                  Valider
              </button>
          </form>


@endsection

