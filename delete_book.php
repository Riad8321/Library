<?php 
// Connexion à la base de données
try {
    $db = new PDO(
        'mysql:host=localhost;dbname=library;charset=utf8',
        'root',
        '',
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    );

    $requete = "DELETE FROM books WHERE id = :id";

    $data = $db->prepare($requete);

    $data->execute(array(
        "id" => $_GET['id']
    ));  

    header('Content-Type: application/json');
    echo json_encode("La tache a été supprimée");

} catch (Exception $e) {
    echo "Connexion refusée à la base de données";
    exit();
}

?>