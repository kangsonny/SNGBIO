<?php
function print_title(){
  if(isset($_GET['id'])){
    echo $_GET['id'];
  } else {
    echo "Wecome to S&G Biotech Borad Members";
  }
}
 ?>
 <?php
 function print_description(){
   if(isset($_GET['id'])){
   echo file_get_contents("data/".$_GET['id']);
  } else {
   echo "에스앤지 바이오텍 주간보고입니다.";
  }
}
  ?>
  <?php
  function print_list(){
    $list=scandir('data');
    $i=0;
    while($i<count($list)){
      if($list[$i] !='.'){
        if($list[$i] !='..'){
          ?>
          <li><a href="index.php?id=<?=$list[$i]?>"><?=$list[$i]?></a></li>
          <?php
        }
      }
      $i = $i + 1;
    }
  }
   ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>
      <?php
        print_title();
       ?>
    </title>
    <style media="screen">
      a {
        color:blue;
        text-decoration-style:solid;
        font-size:20px;
      }
    </style>
  </head>
  <body>
    <h1><a href="index.php">SNGBIO</a></h1>
    <ol>
      <?php
      print_list();
       ?>
    </ol>
    <a href="create.php">CREATE</a>
    <?php if(isset($_GET['id'])) { ?>
    <a href="update.php?id=<?=$_GET['id']?>">UPDATE</a>
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


  </body>
</html>
