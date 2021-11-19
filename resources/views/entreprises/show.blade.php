@extends ('layouts.app')

@section('content')
    <div class="entreprise-show">
        <h1>Détail de l'entreprise</h1>
        <table>
            <thead>
                <tr>
                    <th colspan="2">{{ $entreprise['nom'] }}</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Rue</td>
                    <td>{{ $entreprise['rue'] }}</td>
                </tr>
                <tr>
                    <td>Ville</td>
                    <td>{{ $entreprise['ville'] }}</td>
                </tr>
                <tr>
                    <td>Code postal</td>
                    <td>{{ $entreprise['code_postal'] }}</td>
                </tr>
                <tr>
                    <td>Téléphone</td>
                    <td>{{ $entreprise['telephone'] }}</td>
                </tr>
                <tr>
                    <td>E-mail</td>
                    <td>{{ $entreprise['email'] }}</td>
                </tr>
            </tbody>
        </table>

        <div class="action-button">
            @can('update', $entreprise)
                <form action="{{ route('entreprise.edit', $entreprise) }}" method="GET">
                    @csrf
                    <button type="submit" class="edit">Editer</button>
                </form>
            @endcan

            @can('delete', $entreprise)
                <form action="{{ route('entreprise.destroy', $entreprise) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="delete">Supprimer</button>
                </form>
            @endcan

            <form action="{{ route('entreprise.index', $entreprise) }}" method="GET">
                @csrf
                <button type="submit" class="home">Retour</button>
            </form>
        </div>

    </div>

@endsection
