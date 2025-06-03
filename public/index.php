<?php
header('Content-Type: application/json');

header('Access-Control-Allow-Origin: *'); // ou un domaine spécifique
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

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
