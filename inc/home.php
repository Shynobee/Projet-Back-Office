<?php

?>

<div class="home-top">
    <div class="home-top-box">
       <span> Nb Client</span>
       <span><?= $client?></span>
    </div>
    <div class="home-top-box">
        <span>Mes clients</span>
        <span><?= $mclient[0]["COUNT(*)"] ?></span>
    </div>
    <div class="home-top-box">
        <span>Derniere fiche client visité :</span>
        <span><?= $lastview[0]['client'] ?></span>
    </div>
    <div class="home-top-box">
        <span>Derniere connection le :</span>
        <span><?= $_SESSION['detail'][0]['lastconnection'] ?></span>
    </div>
</div>
<div class="home-content">
    
    <div class="home-content-list">
    <h2>Last post</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Client</th>
                <th>Status</th>
                <th>Posted By</th>
                <th>Posted At</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
    <?php foreach($listtop as $key=>$items){
        ?>
    <tr>
    <?php foreach($items as $key=>$item){ 
        if($key !='context' && $key !='objectifs' && $key !='presentation' && $key !='output' && $key !='preview') {?>
        <td><?= $item ?></td>
    <?php }} ?>
    <td id='btn'><a href="?page=VIEW CLIENT&id=<?=$items['id'] ?>">View</a></td>
    </tr>
    <?php } ?>
    </tbody>
    </table>
    </div>

</div>