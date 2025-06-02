<?php
// api.php ou index.php

header('Content-Type: application/json');

// Exemple de données à renvoyer
$response = [
    'status' => 'success',
    'message' => 'Données récupérées avec succès',
    'data' => [
        'user_id' => 123,
        'name' => 'John Doe'
    ]
];

// Affichage de la réponse JSON
echo json_encode($response);
