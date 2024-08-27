<?php 
    // prendo la mia lista di cose da fare dal file json
    $stringa = file_get_contents('task.json');
    //  var_dump($stringa);
    // lo trasformo in un array php
    $lista= json_decode($stringa);
    var_dump($lista);

?>