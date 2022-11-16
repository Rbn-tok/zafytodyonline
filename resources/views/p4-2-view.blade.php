@extends('template.main')

@section('title',"Enregistrement de l'information de votre startup")

@section('content')


<div class="row gap-20 masonry pos-r">
    <div class="masonry-sizer col-md-6"></div>
    <div class="masonry-item col-md-12">
      <div class="bgc-white p-20 bd">
        <h3 class="c-grey-900"></h3>
        <div class="mT-30">
            <div class="row">
              <div class="col-lg-12">
                <div class="mb-3">
                  <input type="texte" name="user_id" value="{{Auth::id()}}" style="display:none;">
                  <label class="form-label" for="exampleInputEmail1" style="font-weight: 600;">Soyez sur de a validité de votre projet en effectuant une petite enquete auprès de vos segments clientèle</label>
                  <p></p>
                 </div>
              </div>
              <div class="col-lg-12">
                <div class="mb-3">
                  <label class="form-label" for="exampleInputEmail1" style="font-weight: 600;">Nous demandons au mooins d'avoir 30 réponses</label>
                  <p></p>
                 </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="mb-3">
                  <label class="form-label" for="exampleInputEmail1"  style="font-weight: 600;">
                {{-- label --}}

                    </label>
                  <p></p>
                  </div>
              </div>
            </div>








<br><br>

        </div>
      </div>
      <div class="masonry-item col-md-12">
        <div class="bgc-white p-20 bd">
            <h3 class="c-grey-900">Espace commentaire</h3>
            <div class="mb-3">
                <label class="form-label" for="exampleInputEmail1" style="font-weight: 600;">Coach: </label>Jonathan<br>
                <label class="form-label" for="exampleInputEmail1" style="font-weight: 600;">Date: </label>15/11/2022<br>
                <label class="form-label" for="exampleInputEmail1" style="font-weight: 600;">Sujet: </label>Problème<br>
                <label class="form-label" for="exampleInputEmail1" style="font-weight: 600;">Commentaire: </label>Lorem ipsum

              </div>
        <form action="{{ route('p4-2.comment') }}">
            @csrf
            <div class="mb-3">

                <label class="form-label" for="exampleInputEmail1" style="font-weight: 600;">Laisser un commentaire</label>
                <textarea class="form-control"placeholder="" name="commentaire"></textarea>
                <br>
              {{--   <a href="{{route('comment')}}"> --}}  <button type="submit" class="btn btn-primary" >Laisser un commentaire</button>{{--  </a>--}}
              </div>
            </form>
        </div>

      </div>
    </div>
@endsection
