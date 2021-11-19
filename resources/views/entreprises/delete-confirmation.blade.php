@extends ('layouts.app')

@section('content')
    <div class="entreprise-delete-confirmation">
        <h1>Suppression d'une entreprise</h1>

        <p>L'entreprise {{ $entreprise_nom }} a bien été supprimée</p>

        <a href="{{ route('entreprise.index') }}">
            < Retour
        </a>
    </div>

@endsection
