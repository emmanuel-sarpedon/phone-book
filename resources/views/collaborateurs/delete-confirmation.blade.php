@extends ('layouts.app')

@section('content')
    <div class="collaborateur-delete-confirmation">
        <h1>Suppression d'un collaborateur</h1>

        <p>Le collaborateur {{ $collaborateur_identity }} a bien été supprimé</p>

        <a href="{{ route('collaborateur.index') }}">
            < Retour
        </a>
    </div>

@endsection
