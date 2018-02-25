<?php
require 'header.php';

$client = $_POST['client'];
$context = $_POST['context'];
$objectifs = $_POST['objectifs'];
$presentation = $_POST['presentation'];
$output = $_POST['output'];
$postby = $_SESSION['newsession'];
$tab = [':client' => $client, ':context' => $context,':objectifs' => $objectifs,
    ':presentation' => $presentation,
    ':output' => $output,':postedby'=>$postby,
    
];

$mdb->request('INSERT INTO `refs`(`client`, `context`, `objectifs`, `presentation`, `output`, `createdBY`) VALUES (:client, :context, :objectifs, :presentation, :output, :postedby)', $tab);

header('Location: reference.php');