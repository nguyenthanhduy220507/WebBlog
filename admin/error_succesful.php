<?php
      if(isset($_GET['error'])){
    ?>
        <span class="text-danger fs-2 text-center">
          <?php echo $_GET['error']?>
        </span>
    <?php } ?>

    <?php
      if(isset($_GET['succesful'])){
    ?>
        <span class="text-info bg-light fs-2">
          <?php echo $_GET['succesful']?>
        </span>
    <?php } ?>

