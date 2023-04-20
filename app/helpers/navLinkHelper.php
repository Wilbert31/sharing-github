<?php

    function activeLink($pages){
        return ($pages == getUrl()) ? 'active' : '';
    }

    function getUrl(){
        if(isset($_GET['url'])){
            return$_GET['url'];
        }
    }

?>