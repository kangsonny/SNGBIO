<?php
require_once('lib/print.php');
require_once('view/top.php');
 ?>
    <a href="create.php">CREATE</a>
    <?php if(isset($_GET['id'])) { ?>
    <a href="update.php?id=<?=$_GET['id']?>">UPDATE</a>
    <form action="delete_process.php" method="post">
      <input type="hidden" name="id" value="<?=$_GET['id']?>">
      <input type="submit" value="delete">

    </form>
  <?php } ?>

    <h2>
      <?php
      error_reporting(E_ALL^ E_WARNING);
       ?>
      <?php
        print_title();
       ?>
    </h2>
    <h2>  <?php
        print_description();
       ?>
     </h2>


<?php
require('view/bottom.php');
 ?>
