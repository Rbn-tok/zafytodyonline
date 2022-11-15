@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>
{{Auth::id()}}
                <div class="card-body">
                    <form method="POST" action="{{ route('startup.post') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="nom" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

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
                            <label for="nom" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="site_web" type="texte" class="form-control{{ $errors->has('site_web') ? ' is-invalid' : '' }}" name="site_web" value="{{ old('site_web') }}" required autofocus>
                            

                                @if ($errors->has('site_web'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('site_web') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nom" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="facebook" type="texte" class="form-control{{ $errors->has('facebook') ? ' is-invalid' : '' }}" name="facebook" value="{{ old('facebook') }}" required autofocus>
                                

                                @if ($errors->has('facebook'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('facebook') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="statut_juridique" value="Informel"> Informel
                                        <input type="radio" name="statut_juridique" value="EI"> EI
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="remuneration" value="Oui"> Oui
                                        <input type="radio" name="remuneration" value="Non"> Non
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nom" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="fond" type="texte" class="form-control{{ $errors->has('fond') ? ' is-invalid' : '' }}" name="fond" value="{{ old('fond') }}" required autofocus>
                                

                                @if ($errors->has('fond'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('fond') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="nom" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="date_creation" type="texte" class="form-control{{ $errors->has('date_creation') ? ' is-invalid' : '' }}" name="date_creation" value="{{ old('date_creation') }}" required autofocus>
                                

                                @if ($errors->has('date_creation'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('date_creation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="odd[]" value="odd1"> ODD1
                                        <input type="checkbox" name="odd[]" value="odd2"> ODD1
                                    </label>
                                </div>
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
