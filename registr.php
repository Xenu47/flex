<?php
$user = $_POST["r_username"];
$mail = $_POST['r_mail'];
$pass = $_POST["r_password"];
$json = file_get_contents('data/users.json');
$users_obj = json_decode($json,true);
  foreach ($users_obj as $info) {
    if($user == $info['username']){
      echo 'login';
      exit();
    }
    if($mail == $info['mail']){
      echo 'mail';
      exit();
    }
  }
$count = count($users_obj);
$count = $count + 1;
$users_obj[strval($count)] = array('username' =>$user ,'password'=>$pass,'mail'=>$mail );
$json = json_encode($users_obj);
file_put_contents('data/users.json', $json);
    session_start();
    $_SESSION['login'] = $user;
    $array1 = array('username'=>$user);
    echo json_encode($array1);
    exit();


 ?>
