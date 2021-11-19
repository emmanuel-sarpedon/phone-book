@extends ('layouts.app')

@section('content')
    <div class="entreprise-delete-forbidden">
        <h1>🚨 Action refusée</h1>

        <p>L'entreprise {{ $entreprise_nom }} n'a pu être supprimée. Les collaborateurs ci-dessous appartiennent à
            l'entreprise</p>

        <ul>
            @foreach ($collaborateurs as $collaborateur)
                <li>{{ $collaborateur->nom }} {{ $collaborateur->prenom }} - {{ $collaborateur->email }}</li>
            @endforeach
        </ul>

        <a href="{{ route('entreprise.index') }}">
            < Retour </a>
    </div>

@endsection
