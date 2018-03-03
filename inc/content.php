<?php
include('functions.php');
$l=$mdb->request('UPDATE `users` SET `lastview` = :lv WHERE id=:id',['lv'=> $_GET['id'],'id'=>$_SESSION['detail'][0]['id']]);

$_SESSION['client'] = $mdb->request('SELECT * FROM refs ORDER BY `id` DESC  ', []);

$detail = $mdb->request('SELECT * FROM refs WHERE id = :id', array('id' => $_GET['id']));





switch ($_GET['page']) {
    case 'HOME':
        $client = $mdb->request('SELECT COUNT(*) FROM refs ', ['']);
        $mclient = $mdb->request('SELECT COUNT(*) FROM refs WHERE createdBY =:id ', ['id' => $_SESSION['newsession']]);
        $lv=$mdb->request('SELECT `lastview` FROM users WHERE username = :id', array('id' => $_SESSION['newsession']));
        $lastview= $mdb->request('SELECT `client` FROM refs WHERE id = :id', array('id' => $lv[0]['lastview']));
        if (count($_SESSION['client']) > 5) {$listtop = array_slice($_SESSION['client'], 0, 5);} else { $listtop = $_SESSION['client'];}
        include 'home.php';
        break;
    case 'CLIENT LIST':
        $listpage = array();
        for ($i = 0; $i < (count($_SESSION['client'])/14); $i++) { $ar=array_slice($_SESSION['client'], ($i*14), 14); array_push($listpage,$ar);}
        include 'client-list.php';
        break;
    case 'ADD NEW CLIENT':
        include 'add-view.php';
        break;
    case 'EDIT CLIENT':
        include 'edit-view.php';
        break;
    case 'VIEW CLIENT':
        include 'view-view.php';
        break;
    default:
        $_GET['page'] = 'HOME';
        break;

}
