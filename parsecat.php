<?php

ini_set("display_errors",1);
error_reporting(E_ALL);
require_once("function/function.php");
require_once("config/config.php");
$sql = "SELECT * FROM programs";
$result = mysqli_query($connection, $sql);

$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

foreach ($rows as $row) {
  $site = "{$row['href']}";
 $content = file_get_contents("{$site}");//силка
 $pos = strpos($content, ';GenrePage&quot;}">' );
 $content = substr($content, $pos);
 $pos = strpos($content, '</a>');
 $content = substr($content, 0, $pos);
 $a=$content;
$healthy = array(';GenrePage&quot;}">', '</a>', ' ');
$yummy   = array("", "", "","");
$a = str_replace($healthy, $yummy, $a);
$c = $a;
$query = "UPDATE programs  SET category = '{$c}' WHERE href = '{$site}' ";
$run_query = mysqli_query($connection, $query);
if($run_query == true){
$msg_success = "Вітаю вас, Ви успішно додали програму";
}
else{
$error_msg = "Упс... Щось пішло не так,спробуйте пізніше або зверніться у службу підтримки";
}
}


 ?>
