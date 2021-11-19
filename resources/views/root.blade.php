@extends('layouts.app')

@section('content')
    <div class="root">
        <a href="{{ route('entreprise.index') }}"><button>Gestion entreprises</button></a>
        <a href="{{ route('collaborateur.index') }}"><button>Gestion collaborateurs</button></a>
    </div>

@endsection
