<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
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
      <li><a href="index.php?id=sales">sales</a></li>
      <li><a href="index.php?id=manufacturing">manufacturing</a></li>
      <li><a href="index.php?id=management">management</a></li>
      <li><a href="index.php?id=marketing">marketing</a></li>
    </ol>
    <h2>
      <?php
      error_reporting(E_ALL^ E_WARNING);
       ?>
      <?php
        if(isset($_GET['id'])){
          echo $_GET['id'];
      } else {
        echo "Welcome S&G Biotech Board Members";
      }
       ?>
    </h2>
    <h2>  <?php
          if(isset($_GET['id'])){
          echo file_get_contents("data/".$_GET['id']);
        } else {
          echo "에스앤지 바이오텍 주간보고입니다.";
        }
       ?>
     </h2>


  </body>
</html>
