<?php if (count($errors) > 0): ?>
    
        
        <div id="AlertBox1" class="alert alert-danger " style="background-color: #fa8564;color: white">
                <?php foreach ($errors as $error): ?>
            <p style="color: white"><?php echo $error; ?></p>
                <?php endforeach ?>
            </div>
  
    <?php
 endif ?>
