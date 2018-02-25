<?php
require 'header.php';
$id = $_GET['id'];
$tab = [
    ':id'=> $id,
];
$mdb->request('DELETE FROM `refs` WHERE `id`=:id', $tab);

header('Location:reference.php?page=CLIENT LIST&num=0');