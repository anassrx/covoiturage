<?php

include_once '../config.php';
include_once '../utilService.php';

function findCompte($data) {
    $rib = $data['rib'];
    $query = "SELECT * FROM compte WHERE rib='$rib'";
    return loadOne($query);
}

function findAllCompte() {
    $query = "SELECT * FROM compte";
    return loadMultiple($query);
}

function deleteCompte($data) { // insert update delete
     $rib = $data['rib'];
    $query = "DElETE FROM compte WHERE rib='$rib'";
    return execRequest($query);
}

?>