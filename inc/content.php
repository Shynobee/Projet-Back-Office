<?php
$l=$mdb->request('UPDATE `users` SET `lastview` = :lv WHERE id=:id',['lv'=> $_GET['id'],'id'=>$_SESSION['detail'][0]['id']]);
$client = $mdb->request('SELECT COUNT(*) FROM refs ', ['']);
$mclient = $mdb->request('SELECT COUNT(*) FROM refs WHERE createdBY =:id ', ['id' => $_SESSION['newsession']]);
if(!empty($_SESSION['search'])){
$list = $mdb->request('SELECT * FROM refs WHERE `client` LIKE :search ORDER BY `id` DESC ', ['search'=>('%'.$_SESSION['search'].'%'),]);   
}else{
$list = $mdb->request('SELECT * FROM refs ORDER BY `id` DESC  ', []);
}
$detail = $mdb->request('SELECT * FROM refs WHERE id = :id', array('id' => $_GET['id']));
$lv=$mdb->request('SELECT `lastview` FROM users WHERE username = :id', array('id' => $_SESSION['newsession']));
$lastview= $mdb->request('SELECT `client` FROM refs WHERE id = :id', array('id' => $lv[0]['lastview']));
$listpage = array();
for ($i = 0; $i < (count($list)/14); $i++) { $ar=array_slice($list, ($i*14), 14); array_push($listpage,$ar);}
if (count($list) > 3) {$listtop = array_slice($list, 0, 5);} else { $listtop = $list;}

switch ($_GET['page']) {
    case 'HOME':
        include 'home.php';
        break;
    case 'CLIENT LIST':
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
