<?php
include_once '../utilControler.php';
include_once './compteService.php';


$data = decode(1);
if (isset($data["find"])) {
    printEncode(findCompte($data));
} else if (isset($data["findAll"])) {
    printEncode(findAllCompte());
} else if (isset($data["compteRemoveButton"])) {
    deleteCompte($data);
}

?>