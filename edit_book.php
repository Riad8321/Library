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

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $bookID = $_POST['id'];
        $title = $_POST['title'];
        $author = $_POST['author'];
        $year = $_POST['year'];
        $genre = $_POST['genre'];

        $requete = "UPDATE books SET title = :title, author = :author, year = :year, genre = :genre WHERE id = :id";
        $data = $db->prepare($requete);

        $data->execute(array(
            "id" => $bookID,
            "title" => $title,
            "author" => $author,
            "year" => $year,
            "genre" => $genre,
        ));

        if ($data->rowCount() == 1) {
            echo json_encode("Livre modifié");
        } 
    }
} catch (Exception $e) {
    echo "Connexion refusée à la base de données";
    exit();
}
?>
