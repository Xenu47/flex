<?php
$user = $_POST["username"];
$pass = $_POST["password"];
$json = file_get_contents('data/users.json');
$users_obj = json_decode($json,true);
foreach ($users_obj as $info) {
  if($info['username']==$user && $info['password'] == $pass){
    session_start();
    $_SESSION['login'] = $user;
    $array1 = array('username'=>$info['username']);
    echo json_encode($array1);
    exit();
  }
}
  echo "false";
?>
