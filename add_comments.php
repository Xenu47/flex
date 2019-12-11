<?php
$comment = $_POST['comment_write'];
session_start();
if(!isset($_SESSION['login'])){
  echo false;
  exit();
}
$login = $_SESSION['login'];
$data_comments = json_decode(file_get_contents("data/comments.json"),true);
$count = count($data_comments) + 1;
$data_comments[strval($count)] = array("login"=>$login,"comment"=>$comment);
$json = json_encode($data_comments);
file_put_contents('data/comments.json', $json);
echo json_encode(array('login'=>$login,'comment'=>$comment));
?>
