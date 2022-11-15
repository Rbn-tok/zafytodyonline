@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>
{{Auth::id()}}
                <div class="card-body">
                    <form method="POST" action="{{ route('projet.post') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="nom" class="col-sm-4 col-form-label text-md-right">Nom</label>

                            <div class="col-md-6">
                                <input id="nom" type="texte" class="form-control{{ $errors->has('nom') ? ' is-invalid' : '' }}" name="nom" value="{{ old('nom') }}" required autofocus>
                                <input type="texte" name="user_id" value="{{Auth::id()}}" style="display:none;">

                                @if ($errors->has('nom'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('nom') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nom" class="col-sm-4 col-form-label text-md-right">probleme</label>

                            <div class="col-md-6">
                                <textarea name="probleme"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nom" class="col-sm-4 col-form-label text-md-right">solution</label>

                            <div class="col-md-6">
                                <textarea name="solution"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nom" class="col-sm-4 col-form-label text-md-right">difference_concurrence</label>

                            <div class="col-md-6">
                                <textarea name="difference_concurrence"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nom" class="col-sm-4 col-form-label text-md-right">date_creation</label>

                            <div class="col-md-6">
                                <input type="text" name="date_creation">
                            </div>
                        </div>


                        <div class="form-group row mb-4">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Envoyer                                </button>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
