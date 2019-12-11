<?php
$data_comments = json_decode(file_get_contents("data/comments.json"),true);
$stat = intval($_POST['comment_number']);
if($stat > 0){
  $count = $_POST['comment_number'];
}
elseif($stat == -1){
  $count = count($data_comments);
}
else{
  echo "false";
  exit();
}
$i = $count;
for(;$i > $count - 4;$i--){
  if($i==0){
    break;
  }
  $new_data_comments[strval($count-$i+1)] = $data_comments[strval($i)];
}
$new_data_comments['new_start'] = strval($i);
echo json_encode($new_data_comments);
?>
