@extends('template.main')

@section('title',"Enquête utilisateur")

@section('content')

<div class="row gap-20 masonry pos-r">
    <div class="masonry-sizer col-md-6"></div>
    <div class="masonry-item col-md-12">
      <div class="bgc-white p-20 bd">
        <h3 class="c-grey-900">Enquête utilisateur</h3>
        <p>Soyez sur de a validité de votre projet en effectuant une petite enquete auprès de vos segments clientèle. Nous demandons au moins d'avoir 30 réponses</p>
        <p>Fichier à télécharger: <a href="#">template Excel à remplir</a></p>
        <div class="mb-3">
          <label class="form-label" for="exampleInputEmail1">Une fois rempli, mettre en ligne votre fichier ici</label>
          <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        
        <button type="submit" class="btn btn-primary btn-color">Valider</button>
      </form>
      </div>
    </div>
  </div>



    
    
    

@endsection