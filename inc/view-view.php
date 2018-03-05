<div class="exportpdf">
        <a href="export.php?id=<?=$_GET['id']?>">Pdf</a>  
</div>
                
<?php foreach($detail as $key=>$items){ ?>
        <div class="view-container">
        <div class="view-main-section">
        <div class="view-main-title">         
                    <h2><?= $items['client'] ?></h2>
                    <p>Published by <?=$items['createdBY']?> at <?=$items['createdAT']?></p>     
        </div>
        <div class="view-main-content">
                <div class="view-content"> 
                <?php foreach($items as $key=>$item){ 
                        if($key=='context' || $key=='objectifs' || $key=='presentation' || $key=='output'){ ?>
                        <div class="view-detail-content">
                        <span class="spantitle"><?=$key?></span>
                        <p><?= $item ?></p>
                        </div>
                <?php }} ?>
                </div>     
        </div>
        </div>  
        <div class="illustration">
        <img src="<?php  if($items['preview']!=NULL){echo $items['preview'];}else{ echo '../img/addimg.png';} ?>" alt="">
        </div>   
        </div>  
     <?php } ?>
