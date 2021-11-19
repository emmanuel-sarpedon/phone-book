@extends ('layouts.app')

@section('content')
    <div class="entreprise-edit-form">
        <h1>Modification d'une entreprise</h1>

        <form action="{{ route('entreprise.update', $entreprise) }}" method="POST">
            @csrf
            @method('PUT')
            <label>Nom<input type="text" name="nom" value={{ $entreprise->nom }} required></label>
            <label>Rue<input type="text" name="rue" value={{ $entreprise->rue }} required></label>
            <label>Code postal<input type="number" max="99999" name="code_postal" value={{ $entreprise->code_postal }}
                    required></label>
            <label>Ville<input type="text" name="ville" value={{ $entreprise->ville }} required></label>
            <label>Téléphone<input type="number" name="telephone" value={{ $entreprise->telephone }} minlength="10"
                    maxlength="12"></label>
            <label>Email<input type="text" name="email" value={{ $entreprise->email }} required></label>

            @can('update', $entreprise)
                <button type="submit">Modifier</button>
            @endcan
        </form>

        <a href="{{ route('entreprise.index') }}">
            < Retour</a>
    </div>

@endsection
