

<div class="view-main-section">
  
    <form action="add.php" method="POST" enctype="multipart/form-data">
            <div class="view-main-title">
                    
                    <input required name="client" class="client client-bcg" type="text" placeholder='Nom du client' >
                    <input required accept="file_extension|image/*" type="file" name="previmg" class="previmg"">
                    
            </div>
            <div class="view-main-content">
                <div class="view-content">
                    
                   
                        <span>Context</span>
                        <textarea required class="add-content-detail"  rows='5' name="context" value=""></textarea>
             
                        <span>Presentation</span>
                        <textarea required class="add-content-detail"  rows='5' name="presentation" value=""></textarea>
     
                        <span>Objectifs</span>
                        <textarea required class="add-content-detail"  rows='5' name="objectifs" value=""></textarea>
    
                        <span>Output</span>
                        <textarea required class="add-content-detail"  rows='5' name="output" value=""></textarea>
               
                    
                </div> 
            </div>
            <input type="submit" name='submit1'  class="update" value="Add" >
     </form>
</div>
