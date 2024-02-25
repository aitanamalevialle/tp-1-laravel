@extends('layout')
@section('title', 'Modification étudiant')
@section('content')
    <h1 class="mt-4 mb-4">Modifier un étudiant</h1>
    <div class="row mb-4">
        <form method="POST">
            @csrf
            @method('PUT')
            <div class="col-md-4 mb-4">
                <div class="mb-4">
                    <label for="nom" class="form-label">Nom</label>
                    <input type="text" class="form-control" id="nom" name="nom" value="{{old('nom', $etudiant->nom)}}">
                    @if($errors->has('nom'))
                    <div class="text-danger mt-2">
                        {{ $errors->first('nom')}}
                    </div>
                    @endif
                </div>
                <div class="mb-4">
                    <label for="adresse" class="form-label">Adresse</label>
                    <input type="text" class="form-control" id="adresse" name="adresse" value="{{old('adresse', $etudiant->adresse)}}">
                    @if($errors->has('adresse'))
                    <div class="text-danger mt-2">
                        {{ $errors->first('adresse')}}
                    </div>
                    @endif
                </div>
                <div class="mb-4">
                    <label for="telephone" class="form-label">Téléphone</label>
                    <input type="tel" class="form-control" id="telephone" name="telephone" value="{{old('telephone', $etudiant->telephone)}}">
                    @if($errors->has('telephone'))
                    <div class="text-danger mt-2">
                        {{ $errors->first('telephone')}}
                    </div>
                    @endif
                </div>
                <div class="mb-4">
                    <label for="email" class="form-label">Courriel</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{old('email', $etudiant->email)}}">
                    @if($errors->has('email'))
                    <div class="text-danger mt-2">
                        {{ $errors->first('email')}}
                    </div>
                    @endif
                </div>
                <div class="mb-4">
                    <label for="date_de_naissance" class="form-label">Date de naissance</label>
                    <input type="date" class="form-control" id="date_de_naissance" name="date_de_naissance" value="{{old('date_de_naissance', $etudiant->date_de_naissance)}}">
                    @if($errors->has('date_de_naissance'))
                    <div class="text-danger mt-2">
                        {{ $errors->first('date_de_naissance')}}
                    </div>
                    @endif
                </div>
                <div class="mb-4">
                    <label for="ville_id" class="form-label">Ville</label>
                    <select class="form-select" id="ville_id" name="ville_id">
                        <option selected>Choisir une ville</option>
                        @foreach($villes as $ville)
                            <option value="{{ $ville->id }}" {{ old('ville_id', $etudiant->ville_id) == $ville->id ? 'selected' : '' }}>{{ $ville->nom }}</option>
                        @endforeach
                    </select>
                    @if($errors->has('ville_id'))
                    <div class="text-danger mt-2">
                        {{ $errors->first('ville_id')}}
                    </div>
                    @endif
                </div>
            </div>
            <button type="submit" class="btn btn-info">Sauvegarder</button>
        </form>
    </div>
@endsection