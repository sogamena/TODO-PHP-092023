<?php
    function post($name, $default= ''){
        if(isset($_POST[$name])){
            return htmlentities($_POST[$name]);
        }else{
            return $default;
        }

    }

    function get($name, $default=null){
        if(isset($_GET[$name])){
            return htmlentities($_GET[$name]);
        }else{
            return $default;
        }

    }
?>