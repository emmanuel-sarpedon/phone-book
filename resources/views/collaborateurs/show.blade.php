@extends ('layouts.app')

@section('content')
    <div class="collaborateur-show">
        <h1>Détail du collaborateur</h1>
        <table>
            <thead>
                <tr>
                    <th colspan="2">{{ $collaborateur['nom'] }} {{ $collaborateur['prenom'] }}</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Rue</td>
                    <td>{{ $collaborateur['rue'] }}</td>
                </tr>
                <tr>
                    <td>Ville</td>
                    <td>{{ $collaborateur['ville'] }}</td>
                </tr>
                <tr>
                    <td>Code postal</td>
                    <td>{{ $collaborateur['code_postal'] }}</td>
                </tr>
                <tr>
                    <td>Téléphone</td>
                    <td>{{ $collaborateur['telephone'] }}</td>
                </tr>
                <tr>
                    <td>E-mail</td>
                    <td>{{ $collaborateur['email'] }}</td>
                </tr>
            </tbody>
        </table>

        <div class="action-button">
            @can('update', $collaborateur)
                <form action="{{ route('collaborateur.edit', $collaborateur) }}" method="GET">
                    @csrf
                    <button type="submit" class="edit">Editer</button>
                </form>
            @endcan

            @can('delete', $collaborateur)
                <form action="{{ route('collaborateur.destroy', $collaborateur) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="delete">Supprimer</button>
                </form>
            @endcan

            <form action="{{ route('collaborateur.index', $collaborateur) }}" method="GET">
                @csrf
                <button type="submit" class="home">Retour</button>
            </form>
        </div>

    </div>

@endsection
