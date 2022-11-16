@extends('template.main')

@section('title',"Liste des startup")

@section('content')

<div class="row gap-20 masonry pos-r">
    <div class="masonry-sizer col-md-6"></div>
    <div class="masonry-item col-md-12">
      <div class="bgc-white p-20 bd">
        <h3 class="c-grey-900">Liste de tous les startups existant</h3>
        <div class="mT-30">

            <div class="table-responsive">
                <table class="table table-striped table-hover table-condensed">
                  <thead>
                    <tr>
                      <th><strong>Nom de startup</strong></th>
                      <th><strong>CEO de startup</strong></th>
                      <th><strong>Action</strong></th>

                    </tr>
                  </thead>
                  <tbody>
                    @forelse($startup as $data)
                    <tr>

                        <th>{{ $data->nom}}</th>
                        <th>{{ $data->nom_ceo}}</th>
                        <th><Button class="btn btn-info">Plus d'Info</Button></th>

                    </tr>
                    @empty
                        <tr><td colspan="4">No record found</td></tr>
                    @endforelse
                  </tbody>
                </table>
              </div>


        </div>
      </div>

    </div>
@endsection
