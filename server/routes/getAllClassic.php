<?php
    // echo (__DIR__."/../controller/Controller.php");

    require_once (__DIR__."/../controller/Controller.php");

    $result = $classic->getAll();

    //Devolvemos el resultado de la BD con JSÇON
    echo json_encode($result);

?>