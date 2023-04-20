<?php
    function redirectTo($page){
        header('location: ' . URLROOT . '/' . $page);
    }
?>