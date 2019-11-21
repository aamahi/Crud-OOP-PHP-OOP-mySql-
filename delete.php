<?php 
spl_autoload_register(function ($class) {
    include "class/$class.php";
});

$id = $_GET['id'];

$delete = new Employe();
$delete->delete($id);

