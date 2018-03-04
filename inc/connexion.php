<?php
include('header.php');
$id = $_POST['id'];
$mp = $_POST['mp'];
$sha1 = 'aaf4c61ddcc5e8a2dabede0f3b482cd9aea9434d';
if(!empty($id) && !empty($mp)) {
    $result = $mdb->request('SELECT * FROM users WHERE username=:username',['username'=>$id]);
        if($result[0]['password'] === sha1($mp)) {
            $req=$mdb->request('UPDATE `users` SET `lastconnection` = :lc WHERE username=:username',['lc'=> date("Y-m-d H:i:s"),'username'=>$id]);
            $_SESSION["newsession"] = $id;
            $_SESSION['detail']=$result;
            header('Location: reference.php?page=HOME');
            die();
        } else {
            $er = 'Identifiant ou Mot de passe incorrect';
            header("Location: login.php?erreur=$er");
            die();  
        }
    } else {
        $er = 'Veuillez saisir vos identifiants';   
        header("Location: login.php?erreur=$er");
        die(); 
    }