@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Liste des utilisateurs</h1>

        @php
            $i = 1; // Initialisation du compteur pour les modales
        @endphp

        <!-- Boucle foreach pour afficher les utilisateurs -->
        @foreach($users as $user)
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">Utilisateur {{ $i }} : {{ $user->name }}</h5>
                    <p class="card-text">Email: {{ $user->email }}</p>

                    <!-- Bouton pour ouvrir la fenêtre modale -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#userModal{{ $i }}">
                        Voir plus
                    </button>
                </div>
            </div>

            <!-- Fenêtre modale pour afficher les détails de l'utilisateur -->
            <div class="modal fade" id="userModal{{ $i }}" tabindex="-1" aria-labelledby="exampleModalLabel{{ $i }}" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel{{ $i }}">Détails de l'utilisateur {{ $i }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Nom : {{ $user->name }}</p>
                            <p>Email : {{ $user->email }}</p>
                            <p>Date de création : {{ $user->created_at }}</p>
                            <!-- Ajoutez ici d'autres champs si nécessaire -->
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                        </div>
                    </div>
                </div>
            </div>

            @php
                $i++; // Incrémentation du compteur
            @endphp
        @endforeach
    </div>
@endsection
