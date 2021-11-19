@extends ('layouts.app')

@section('content')
    <div class="entreprise-create-form">
        <h1>Création d'une entreprise</h1>

        <form action="{{ route('entreprise.store') }}" method="POST">
            @csrf
            <label>Nom<input type="text" name="nom" required></label>
            <label>Rue<input type="text" name="rue" required></label>
            <label>Code postal<input type="number" max="99999" name="code_postal" required></label>
            <label>Ville<input type="text" name="ville" required></label>
            <label>Téléphone<input type="number" name="telephone" minlength="10" maxlength="12"></label>
            <label>Email<input type="text" name="email" required></label>
            <button type="submit">Créer</button>
            <a href="{{ route('entreprise.index') }}">
                < Retour</a>
        </form>
    </div>

@endsection
