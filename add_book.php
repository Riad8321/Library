<?php 
// die("La tâche : ".$_POST['task']);

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

    $requete = "INSERT INTO books(title, author, year, genre) VALUES(:title, :author, :year, :genre)";

    $data = $db->prepare($requete);

    $data->execute(array(
        "title" => $_POST['title'],
        "author" => $_POST['author'],
        "year" => $_POST['year'],
        "genre" => $_POST['genre'],
    ));

    if($data->rowCount() == 1){
        echo json_encode("Livre ajoutée");
    } else {
        echo "Erreur";
    }

} catch (Exception $e) {
    echo "Connexion refusée à la base de données";
    exit();
}

?>