@extends('app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('companies.index') }}"> Retour</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Attention !</strong> Erreur lors de la saisie.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('companies.update',$company->id_ent) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">

                    <strong>Nom :</strong>
                    <input type="text" name="nom_ent" value="{{ $company->nom_ent }}" class="form-control" placeholder="Nom">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

                    <strong>Secteur :</strong>
                    <input type="text" name="secteur_ent" value="{{ $company->secteur_ent }}" class="form-control" placeholder="Secteur">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

                    <strong>Adresse:</strong>
                    <input type="text" name="adresse_ent" value="{{ $company->adresse_ent }}" class="form-control" placeholder="Adresse">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

                    <strong>Nombre de stagiaires CESI déjà accéptés:</strong>
                    <input type="text" name="stagiaire_pris" value="{{ $company->stagiaire_pris }}" class="form-control" placeholder="Nb stagiaire pris">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

                    <strong>Note Stagiaire:</strong>
                    <input type="text" name="note_stagiaire_ent" value="{{ $company->note_stagiaire_ent }}" class="form-control" placeholder="Note stagiaire">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

                    <strong>Note Tuteur:</strong>
                    <input type="text" name="note_pilote_ent" value="{{ $company->note_pilote_ent }}" class="form-control" placeholder="Name">
                </div>
            </div>
        </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Modifier</button>
            </div>
        </div>

    </form>
@endsection
