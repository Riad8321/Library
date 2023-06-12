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

    $requete = "SELECT id, title, author, year, genre FROM books";

    $data = $db->prepare($requete);

    $data->execute();

    // Récupère toutes les données
    $data = $data->fetchAll();

    // Créer un tableau qui permet d'ajouter les données
    $books = array();

    foreach($data as $book){
        $book = array(
            "id" => $book["id"],
            "title" => $book['title'],
            "author" => $book['author'],
            "year" => $book['year'],
            "genre" => $book['genre'],
        );
        $books[] = $book;
    }

    header('Content-Type: application/json');
    echo json_encode($books);

} catch (Exception $e) {
    echo "Connexion refusée à la base de données";
    exit();
}


?>