@extends('layout')
@section('title', 'Étudiant')
@section('content')
    <h1 class="mt-4 mb-4">Étudiant</h1>
    <div class="row mb-4">
      <h5 class="mb-2">{{ $etudiant->nom }}</h5>
      <ul class="list-unstyled">
        <li><strong>Adresse :</strong> {{ $etudiant->adresse }}</li>
            <li><strong>Téléphone :</strong> {{ $etudiant->telephone }}</li>
            <li><strong>Courriel :</strong> {{ $etudiant->email }}</li>
            <li><strong>Date de naissance :</strong> {{ $etudiant->date_de_naissance }}</li>
            <li><strong>Ville :</strong> {{ $etudiant->ville->nom}}</li>
      </ul>
      <div class="mb-4 d-flex">
        <a href="{{ route('etudiant.edit', $etudiant->id) }}" class="btn btn-sm btn-info me-2">Modifier</a>
        <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Supprimer
        </button>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5 text-danger" id="deleteModalLabel">Supprimer</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              Êtes-vous sûr de supprimer cet étudiant : {{ $etudiant->id }} ? 
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
              <form method="post">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger">Supprimer</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection