<?php
include('header.php');
$l=$mdb->request('UPDATE `users` SET `lastview` = :lv WHERE id=:id',['lv'=> $_SESSION['detail'][0]['lasteview'],'id'=>$_SESSION['detail'][0]['id']]);
session_destroy();
header('Location:login.php');
die();