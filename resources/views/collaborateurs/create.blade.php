@extends ('layouts.app')

@section('content')
    <div class="collaborateur-create-form">
        <h1>Création d'un collaborateur</h1>

        <form action="{{ route('collaborateur.store') }}" method="POST">
            @csrf
            <label>Civilité
                <select name="civility">
                    <option value="">- Non renseigné -</option>
                    <option value="Homme">Homme</option>
                    <option value="Femme">Femme</option>
                    <option value="Non-binaire">Non-binaire</option>
                </select>
            </label>

            <label>Nom<input type="text" name="nom" required></label>
            <label>Prénom<input type="text" name="prenom" required></label>
            <label>Rue<input type="text" name="rue" required></label>
            <label>Code Postal<input type="number" name="code_postal" required></label>
            <label>Ville<input type="text" name="ville" required></label>
            <label>Numéro de téléphone<input type="text" name="telephone" minlength="10" maxlength="12"></label>
            <label>Email<input type="email" name="email" required></label>

            <label>Entreprise
                <select name="entreprise_id" required>
                    @foreach ($entreprises as $entreprise)
                        <option value="{{ $entreprise->id }}">{{ $entreprise->nom }}</option>
                    @endforeach
                </select>
            </label>

            <button type="submit">Créer</button>

            <a href="{{ route('collaborateur.index') }}">
                < Retour </a>

        </form>
    </div>

@endsection
