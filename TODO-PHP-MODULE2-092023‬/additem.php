<?php
    include('fct/item.php');
    include('fct/request.php');
    include('config/app.php');
    include('config/db.php');
    include('connexion.php');

    $intitule = post('intitule');
    $query="INSERT INTO todo (intitule) VALUES(:intitule)";
    $stmt = $pdo->prepare($query);
    
    $intitule = post('intitule');
    $stmt->bindParam('intitule',$intitule);
    $stmt->execute(); 

    header('Location:index.php');
?>