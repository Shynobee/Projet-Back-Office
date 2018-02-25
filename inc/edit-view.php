<div class="view-main-section">
<?php foreach($detail as $key=>$items){ ?>
    <form action="update.php?id=<?= $items['id']?>&num=<?= $_GET['num']?>" method="POST" enctype="multipart/form-data">
           
        <div class="view-main-title">
                    
                    <input required value="<?= $items['client'] ?>" name="client" class="client client-bcg" type="text" placeholder='Nom du client' >
                    <input required  value="<?= $items['preview'] ?>" accept="file_extension|image/*" type="file" name="fileToUpload" class="previmg" >
                    
            </div>
            <div class="view-main-content">
                <div class="view-content">
                    
                <?php foreach($items as $key=>$item){ 
                        if($key=='context' || $key=='objectifs' || $key=='presentation' || $key=='output'){ ?>
                        <span><?=$key?></span>
                        <textarea required class="add-content-detail" name="<?=$key?>" ><?= $item ?></textarea>
                <?php }} ?>
                    
                </div> 
            </div>
            <input type="submit" name='submit'  class="update" value="Update" >
          
     </form>
     <?php } ?>
</div>