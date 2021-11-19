@extends ('layouts.app')

@section('content')
    <div class="entreprises-index">

        <h1>Liste des entreprises</h1>

        <div class="filters">
            <form action="{{ route('entreprise.index') }}" method="GET">
                @csrf
                <label>Nom<input type="text" name="nom_filter" value="{{ $filters[0] }}"></label>
                <label>Ville</label><input type="text" name="ville_filter" value="{{ $filters[1] }}"></label>
                <label>Email<input type="text" name="email_filter" value="{{ $filters[2] }}"></label>
                <button type="submit" class="filter">Filtrer</button>
            </form>

            @if ($filters[0] !== NULL || $filters[1] !== NULL || $filters[1] !== NULL)
                <form action="{{ route('entreprise.index') }}" method="GET">
                    @csrf
                    <button class="raz">RAZ</button>
                </form>
            @endif

        </div>


        <table>
            <thead>
                <tr>
                    <th colspan="5">Détails</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Nom</td>
                    <td>Numéro de téléphone</td>
                    <td>Email</td>
                    <td>Code Postal</td>
                    <td></td>
                </tr>

                @foreach ($entreprises as $entreprise)
                    <tr>
                        <td>{{ $entreprise->nom }}</td>
                        <td>{{ $entreprise->telephone }}</td>
                        <td>{{ $entreprise->email }}</td>
                        <td>{{ $entreprise->code_postal }}</td>
                        <td>
                            <form action="{{ route('entreprise.show', [$entreprise->id]) }}" method="GET">
                                @csrf
                                <button type="submit" class="show">Afficher</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        @can('create', App\Models\Entreprise::class)
            <form action="{{ route('entreprise.create') }}" method="GET">
                @csrf
                <button type="submit" class="create">Créer une nouvelle entreprise</button>
            </form>
        @endcan

        <a href="/">
            < Retour</a>

    </div>

@endsection
