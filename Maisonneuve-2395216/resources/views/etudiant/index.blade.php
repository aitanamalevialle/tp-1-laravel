@extends('layout')
@section('title', 'Liste des étudiants')
@section('content')
    <h1 class="mt-4 mb-4">Liste des étudiants</h1>
    <div class="row mb-4">
    @forelse ($etudiants as $etudiant)
    <div class="col-md-6 mb-4 d-flex justify-content-between align-items-center">
        <h5 class="card-title"><a href="{{ route('etudiant.show', $etudiant->id) }}">{{ $etudiant->nom }}</a></h5>
        <div>
            <a href="{{ route('etudiant.edit', $etudiant->id) }}" class="btn btn-sm btn-info me-2">Modifier</a>
            <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $etudiant->id }}">Supprimer</button>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal{{ $etudiant->id }}" tabindex="-1" aria-labelledby="deleteModalLabel{{ $etudiant->id }}" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 text-danger" id="deleteModalLabel{{ $etudiant->id }}">Supprimer</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Êtes-vous sûr de supprimer cet étudiant : {{ $etudiant->id }} ? 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <form method="post" action="{{ route('etudiant.delete', $etudiant->id) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@empty
    <div class="alert alert-danger">Il n'y a pas d'étudiants à afficher.</div>
@endforelse
    </div>
@endsection