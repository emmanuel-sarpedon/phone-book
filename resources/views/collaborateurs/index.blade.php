@extends('layouts.app')

@section('content')
    <div class="collaborateurs-index">
        <h1>Liste des collaborateurs</h1>

        <table>
            <thead>
                <tr>
                    <th colspan="7">Collaborateurs</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>Nom</td>
                    <td>Prénom</td>
                    <td>Numéro du collaborateur</td>
                    <td>Email</td>
                    <td>Entreprise</td>
                    <td>Numéro de l'entreprise</td>
                    <td></td>
                </tr>

                @foreach ($collaborateurs as $collaborateur)
                    <tr>
                        <td>{{ $collaborateur->nom }}</td>
                        <td>{{ $collaborateur->prenom }}</td>
                        <td>{{ $collaborateur->telephone }}</td>
                        <td>{{ $collaborateur->email }}</td>
                        <td>{{ $collaborateur->nom_entreprise }}</td>
                        <td>{{ $collaborateur->tel_entreprise }}</td>
                        <td>
                            <form action="{{ route('collaborateur.show', $collaborateur) }}" method="GET">
                                @csrf
                                <button href="">Afficher</button>
                            </form>
                        </td>
                    </tr>

                @endforeach
            </tbody>
        </table>

        @can('create', App\Models\Collaborateur::class)
            <form action="{{ route('collaborateur.create') }}" method="GET">
                @csrf
                <button type="submit" class="create">Créer un nouveau collaborateur</button>
            </form>
        @endcan


        <a href="/">Retour</a>
    </div>

@endsection
