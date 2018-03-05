<?php
include('functions.php');
if (isset($_GET['id'])){$_SESSION['detail'][0]['lastview']=$_GET['id'];}
$_SESSION['client'] = $mdb->request('SELECT * FROM refs ORDER BY `id` DESC  ', []);



$detail = $mdb->request('SELECT * FROM refs WHERE id = :id', array('id' => $_GET['id']));


switch ($_GET['page']) {
    case 'HOME':
        $client = count($_SESSION['client']);
        $mclient = $mdb->request('SELECT COUNT(*) FROM refs WHERE createdBY =:id ', ['id' => $_SESSION['newsession']]);
        $lastview= $mdb->request('SELECT `client` FROM refs WHERE id = :id', array('id' => $_SESSION['detail'][0]['lastview']));
        if (count($_SESSION['client']) > 5) {$listtop = array_slice($_SESSION['client'], 0, 5);} else { $listtop = $_SESSION['client'];}
        include 'home.php';
        break;
    case 'CLIENT LIST':
        $listpage = array();
        $search = array();
        if(!empty($_POST['searchclient'])){
        $search['client']=$_POST['searchclient'];}
        if(!empty($_POST['published'])){
        $search['status']=$_POST['published'];}
        if(!empty($_POST['postedby'])){
        $search['createdBY']=$_POST['postedby'];}
        
            
        if(!empty($search)){
        $listpage1 = filter($search,$_SESSION['client'] );}
        else{
        $listpage1 = $_SESSION['client'];
        }
        for ($i = 0; $i < (count($listpage1)/14); $i++) { $ar=array_slice($listpage1, ($i*14), 14); array_push($listpage,$ar);}
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
