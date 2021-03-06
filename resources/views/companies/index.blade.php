@extends('app')

@section('content')

    <div class="header">
        <h2>Liste des entreprises</h2>
    </div>
    {{-- Bouton en haut de tableau --}}
    <div class="d-flex flex-row-reverse">
        <div class="p-2">
            <a class="btn btn-success" href="{{ route('companies.create') }}"> Créer une nouvelle entreprise</a>
        </div>
        <div class="p-2">
            <a href="{{ route('companies.index') }}">
                <button class="btn btn-danger" type="button" title="Rafraichir les données">
                    <span class="fas fa-sync-alt"></span>
                </button>
            </a>
        </div>
        <div class="p-2">
            <button class="btn btn-info" type="submit" title="Rechercher une entreprise">
                <span class="fas fa-search"></span>
            </button>
        </div>
        <div class="p-2">
            <form action="{{ route('companies.index') }}" method="GET" role="search">
                <div class="input-group">
                    <input type="text" class="form-control mr-2" name="nomRecherche" placeholder="Rechercher une entreprise"
                        id="nomRecherche">
                </div>
            </form>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="col-lg-12 margin-tb">
        <table class="table table-bordered table-responsive-lg">
            <tr>
                <th>No</th>
                <th>Nom entreprise</th>
                <th>Secteur</th>
                <th>Adresse</th>
                <th>Nombre de stagiaire CESI déjà pris</th>
                <th>Note des stagiaires</th>
                <th>Note des pilotes</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($companies as $company)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $company->nom_ent }}</td>
                    <td>{{ $company->secteur_ent }}</td>
                    <td>{{ $company->adresse_ent }}</td>
                    <td>{{ $company->stagiaire_pris }}</td>
                    <td>{{ $company->note_stagiaire_ent }}</td>
                    <td>{{ $company->note_pilote_ent }}</td>
                    <td>
                        <form action="{{ route('companies.destroy', $company->id_ent) }}" method="POST">

                            <a href="{{ route('companies.show', $company->id_ent) }}" title="show">
                                <i class="fas fa-eye text-success  fa-lg"></i>

                            <a href="{{ route('companies.edit', $company->id_ent) }}">
                                    <i class="fas fa-edit  fa-lg"></i>

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" title="delete"
                                        style="border: none; background-color:transparent;">
                                        <i class="fas fa-trash fa-lg text-danger"></i>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    </div>
    {!! $companies->links() !!}

@endsection
