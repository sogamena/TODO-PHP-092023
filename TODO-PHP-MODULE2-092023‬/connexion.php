<?php
    // include('config.php');
    //Parametre de connexion à la base de donné
    $db= 'mysql:host='.DB_HOST.';dbname='.DB_NAME;
    $username = DB_USER;
    $password = DB_PASSWORD;

    try{
        //Création de l'objet PDO
        $pdo = new PDO($db, $username, $password);

        //Configuration des options de PDO
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //Vous étes maintenant connecté sur la base de donnés
        //....Votre cod pour exécuter des requêtes et

    }catch (PDOException $e) {
        // En cas d'erreur de connexion, affichage du message d'erreur
        echo 'Erreur de connexion : ' .$e->getMessage();
    }
?>