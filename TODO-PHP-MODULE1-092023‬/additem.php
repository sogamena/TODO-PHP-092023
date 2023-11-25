<?php
    include('config/app.php');
    include('fct/request.php');
    include('fct/item.php');
    $intitule = post('intitule');

    if(empty($intitule)){
        echo 'Erreur';
    }else{
        $items = getItems();
        $items[uniqid()] = [
            'checked'=>false,
            'intitule'=>$intitule];
        saveItems($items);
    }

    header('Location:index.php');
?>