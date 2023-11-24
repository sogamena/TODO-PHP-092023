<?php
    include('fct/item.php');
    include('fct/request.php');
    include('config/app.php');

    $items = getItems();
    $id = post('edititem');
    // var_dump($_POST);
    $items[$id]['intitule'] = post('intitule');
    // var_dump($items);
    saveItems($items);

    header('Location:index.php');
?>