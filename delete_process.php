<?php
 unlink('data/'.basename($_POST['id']));
 /* delete 버튼을 인덱스로 추적해서 index.php를 삭제하는 해킹을 방지하기 위해서
 basename()을 추가함 */
 header('Location: /index.php');
 ?>
