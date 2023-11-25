<?php
   include('fct/item.php');
   include('fct/request.php');
   include('config/app.php');
   include('config/db.php');
   include('connexion.php');
   

   $id = get('item');
   $query='UPDATE todo SET checked=1-checked WHERE id=:id';
   $stmt = $pdo->prepare($query);
   
   if(empty($id)){
      echo  'Erreur';
   }else{
      $stmt->bindParam('id',$id);
      $stmt->execute(); 
   }

   header('Location:index.php');
?>