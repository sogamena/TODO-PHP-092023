<?php
    include('fct/item.php');
    include('fct/request.php');
    include('config/app.php');
    include('config/db.php');
    include('connexion.php');

    $id = post('edititem');
    $query="UPDATE todo SET intitule=:intitule WHERE id=:id";
    $stmt = $pdo->prepare($query);
    
    $intitule = post('intitule');
    if(empty($intitule)){
        echo 'Erreur';
    }else{
        $stmt->bindParam('intitule',$intitule);
        $stmt->bindParam('id',$id);
        $stmt->execute(); 
    }
    

    header('Location:index.php');
?>