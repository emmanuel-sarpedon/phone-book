@extends ('layouts.app')

@section('content')
    <div class="collaborateur-edit-form">
        <h1>Modification d'un collaborateur</h1>

        <form action="{{ route('collaborateur.update', ['collaborateur' => $collaborateur]) }}" method="POST">
            @csrf
            @method('PUT')
            <label>Civilité
                <select name="civility">
                    <option value="" {{ $collaborateur->civility === '' ? 'selected' : ''}}>- Non renseigné -</option>
                    <option value="Homme" {{ $collaborateur->civility === 'Homme' ? 'selected' : ''}}>Homme</option>
                    <option value="Femme" {{ $collaborateur->civility === 'Femme' ? 'selected' : ''}}>Femme</option>
                    <option value="Non-binaire" {{ $collaborateur->civility === 'Non-binaire' ? 'selected' : ''}}>Non-binaire</option>
                </select>
            </label>

            <label>Nom<input type="text" name="nom" required value="{{ $collaborateur->nom }}"></label>
            <label>Prénom<input type="text" name="prenom" required value="{{ $collaborateur->prenom }}"></label>
            <label>Rue<input type="text" name="rue" required value="{{ $collaborateur->rue }}"></label>
            <label>Code Postal<input type="number" name="code_postal" required value="{{ $collaborateur->code_postal }}"></label>
            <label>Ville<input type="text" name="ville" required value="{{ $collaborateur->ville }}"></label>
            <label>Numéro de téléphone<input type="text" name="telephone" value="{{ $collaborateur->telephone }}" minlength="10" maxlength="12"></label>
            <label>Email<input type="email" name="email" required value="{{ $collaborateur->email }}"></label>

            <label>Entreprise
                <select name="entreprise_id" required>
                    @foreach ($entreprises as $entreprise)
                        <option value="{{ $entreprise->id }}">{{ $entreprise->nom }}</option>
                    @endforeach
                </select>
            </label>

            <button type="submit">Modifier</button>

            <a href="{{ route('collaborateur.index') }}">
                < Retour </a>

        </form>
    </div>

@endsection
