<div class="option">
    <?php if(isset($_GET['filter'])){?>
    <nav>
    <a>Filtrer</a>
    <a href="?page=CLIENT LIST&num=<?=$_GET['num']?>">X</a>
    </nav>
    <div class="filter">
        <?php include 'filter.php'; 
        ?>
    </div>
    <?php } else { ?>
    <nav>
    <a href="?page=CLIENT LIST&num=<?=$_GET['num']?>&filter=">Filtrer</a>
    </nav>
    <?php } ?>
</div>
<div class="client-list-container">
<div class="client-list">
   
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Client</th>
                <th>Status</th>
                <th>Posted By</th>
                <th>Posted At</th>
                <th id='btn'><a href="?page=ADD NEW CLIENT">Add new client</a></th>
            </tr>
        </thead>
        <tbody>
        
    <?php foreach($listpage[$_GET['num']] as $key=>$items){
        
        ?>
    <tr>
    <?php foreach($items as $key=>$item){ 
        if($key !='context' && $key !='objectifs' && $key !='presentation' && $key !='output' && $key !='preview') {?>
        <td><?= $item ?></td>
    <?php }} ?>
    <td id='btn'>
        <a href="?page=VIEW CLIENT&id=<?=$items['id'] ?>">View</a>
        <a href="?page=EDIT CLIENT&id=<?=$items['id'] ?>&num=<?= $_GET['num']?>">Edit</a>
        <a onclick='alert("Etes vous sur de vouloir supprimer le client <?=$items['client'] ?>");window.close();' href="delete.php?id=<?=$items['id'] ?>">Delete</a></td>
    </tr>
    <?php } ?>
    </tbody>
    </table>
    </div>
    <div class="page">
    <?php $i=0; while($i<count($listpage)) {?>
        <a href="?page=CLIENT LIST&num=<?= $i ?>"><?= $page = $i+1 ?></a>
    <?php $i++; } ?>
</div>
</div>