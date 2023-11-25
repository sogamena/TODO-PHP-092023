<?php
    include('fct/item.php');
    include('fct/request.php');
    include('config/app.php');

    $items = getItems();
    $id = post('edititem');
    $intitule = post('intitule');
    if(empty($intitule)){
        echo 'Erreur';
    }else{
        $items[$id]['intitule'] = $intitule;
        saveItems($items);
    }
    // var_dump($items);

    header('Location:index.php');
?>