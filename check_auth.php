<?php
session_start();
if(isset($_SESSION['login'])){
  $json = file_get_contents('data/users.json');
  $users_obj = json_decode($json,true);
foreach ($users_obj as $info) {
  if($_SESSION['login']==$info['username']){
    $array1 = array('username'=>$info['username']);
    echo json_encode($array1);
    exit();
  }
}
}
else{
  echo "false";
}
 ?>
