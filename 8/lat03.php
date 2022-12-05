<?php

    function belajar (){
        echo "saya belajar PHP";
    }

    function LuasPersegi($p = 5,$l = 3){
        $luas = $p * $l;

        echo $luas ;
    }

    function luas($p = 5, $l = 3){
        $luas = $p * $l;

        return $luas;
    }

    function output(){
        return "Belajar function";
    }

    echo luas() * 5;
?>