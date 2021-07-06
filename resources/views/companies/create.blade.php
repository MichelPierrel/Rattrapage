@extends('app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="header">
            <h2>Ajouter une nouvelle entreprise</h2>
        </div>
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

<form action="{{ route('companies.store') }}" method="POST">
    @csrf

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nom :</strong>
                <input type="text" name="nom_ent" class="form-control" placeholder="Nom">
            </div>
        </div>


                <strong>Secteur :</strong>
                <input type="text" name="secteur_ent" class="form-control" placeholder="Secteur">
            </div>
        </div>


                <strong>Adresse:</strong>
                <input type="text" name="adresse_ent" class="form-control" placeholder="Adresse">
            </div>
        </div>


                <strong>Nombre de stagiaire CESI déjà accéptés:</strong>
                <input type="text" name="stagiaire_pris" class="form-control" placeholder="Nb stagiaire pris">
            </div>
        </div>


                <strong>Note Stagiaire:</strong>
                <input type="text" name="note_stagiaire_ent" class="form-control" placeholder="Note stagiaire">
            </div>
        </div>


                <strong>Note Tuteur:</strong>
                <input type="text" name="note_pilote_ent" class="form-control" placeholder="Name">
            </div>
        </div>
    </div>
</div>
                <button type="submit" class="btn btn-primary">Créer</button>
        </div>
    </div>

</form>
@endsection
