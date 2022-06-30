<?php
function conectarBD(){
    $db = new mysqli('localhost','root','','salon_manga');

    if(!$db){
        echo "No se pudo conectar";
        exit;
    } 

    return $db;
}
