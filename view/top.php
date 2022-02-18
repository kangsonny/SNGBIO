<?php
require_once('lib/print.php');
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
      h1{
        border:1px solid gray;
        text-align:center;
        text-size:50;
      }
    </style>
  </head>
  <body>
    <h1><a href="index.php">Departments Projects in S & G Biotech.</a></h1>
    <ol>
      <?php
      print_list();
       ?>
    </ol>
