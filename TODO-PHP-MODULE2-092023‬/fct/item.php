<?php
    function displayItem($item){
        $edititemid = get('edititem');
        if($edititemid==$item['id']){
            $html='<form action="edititem.php" method="POST">';
            $html.='<input type="hidden" name="edititem" value="'.$item['id'].'">';
            $html.=' <div class="input-group input-group-sm">
                        <input type="text" class="form-control" name="intitule" value="'.$item['intitule'].'">
                        <span class="input-group-append">
                            <button type="submit" class="btn btn-info btn-flat">OK</button>
                        </span>
                    </div>
            
            ';
            $html.='</form>';
        }else{
            $html = '<li class="'. ($item['checked'] ? 'done' : '') .'">
                        <!-- checkbox -->
                        <div class="icheck-primary d-inline ml-2">
                        <a href="toggleitem.php?item='.$item['id'].'">';
            if($item['checked']){
                $html.='<i class="fas fa-check-square"></i>';
            }else{
                $html.='<i class="fas fa-square"></i>';
            }
            $html.='    </a></div>
                        <!-- todo text -->
                        <span class="text">'.
                        $item['intitule']
                        .'</span> 
                        <!-- Emphasis label -->
                        <!-- General tools such as edit or delete-->
                        <div class="tools">
                            <a href="index.php?edititem='.$item['id'].'">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="deleteitem.php?item='.$item['id'].'">
                                <i class="fas fa-trash"></i>
                            </a>
                        </div>
                    </li>';
                }
        return $html;
    }

?>