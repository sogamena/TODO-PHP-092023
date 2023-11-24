<?php
    include('fct/item.php');
    include('fct/request.php');
    include('config/app.php');

    $items = getItems();
    $id = get('item');
    // var_dump($id);
    // foreach($items as $item){
    //     if($item['id']===$id){
    //         var_dump($item);
    //         $item['checked'] =!$item['checked']; 
    //     }
    // }

    $items[$id]['checked'] = !$items[$id]['checked'];
    saveItems($items);

    header('Location:index.php');
?>