<?php
 $route = preg_split("[/]",key($_GET));
 $main = $route[0];
 if(function_exists($main)){
   $main();
 }
 else{
   require('error.html');
 }
function games()
{
  require('games.php');
}
function aboutus()
{
  require('aboutus.php');
}
?>
