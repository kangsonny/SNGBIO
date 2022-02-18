<?php
function print_title(){
  if(isset($_GET['id'])){
    echo htmlspecialchars($_GET['id']);
  } else {
    echo "Wecome to S&G Biotech Borad Members";
  }
}
 ?>
 <?php
 function print_description(){
   if(isset($_GET['id'])){
     $basename=basename($_GET['id']);
     echo htmlspecialchars(file_get_contents("data/".$basename));
     /* basename은 root directory를 해커가 볼 수 없도록 하는 방법으로 원래
     코딩은 basename이 빠진상태로 코딩되었음.*/
  } else {
   echo "에스앤지 프로젝트 관리자 입니다.";
  }
}
  ?>
  <?php
  function print_list(){
    $list=scandir('data');

    $i=0;
    while($i<count($list)){
      $title=htmlspecialchars($list[$i]);
      if($list[$i] !='.'){
        if($list[$i] !='..'){
          ?>
          <li><a href="index.php?id=<?=$title?>"><?=$title?></a></li>
          <?php
        }
      }
      $i = $i + 1;
    }
  }
   ?>
