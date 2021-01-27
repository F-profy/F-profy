<?php
ini_set("display_errors",1);
error_reporting(E_ALL);
//include "config.php";
require_once("function/function.php");
require_once("config/config.php");

$query = " SELECT * FROM programs WHERE price = '1' and take = '2' ";
$run_query = mysqli_query($connection, $query);
while ($c = $run_query->fetch_array(MYSQLI_ASSOC)){
  $site = $c['href'];
  $id = $c['id'];
       $sql = "UPDATE programs SET take='1' WHERE id='{$id}'";
      mysqli_query($conn, $sql);

  $handle = curl_init($site);
  curl_setopt($handle,  CURLOPT_RETURNTRANSFER, TRUE);
  $response = curl_exec($handle);
  $httpCode = curl_getinfo($handle, CURLINFO_HTTP_CODE);
  curl_close($handle);
  if($httpCode == 200) {
      $html = file_get_html("$site");
   $a=$html->find('li[class=inline-list__item inline-list__item--bulleted]', 0)->plaintext;
 if($a == ''){
   echo "1";
 }
 elseif($a == 'Безкоштовно'){
   $sql = "DELETE FROM programs WHERE id='{$id}'";
  mysqli_query($conn, $sql);
 }
 else{
   $sql = "UPDATE programs SET price='{$a}' WHERE id='{$id}'";
  mysqli_query($conn, $sql);
 }
}
else{
  $sql = "UPDATE programs SET price='2' WHERE id='{$id}'";
 mysqli_query($conn, $sql);
}
}


  /*  $content = file_get_contents("$site");//силка
    $pos = strpos($content, '<li class="inline-list__item inline-list__item--bulleted">' );
    $content = substr($content, $pos);
    $pos = strpos($content, '</li>');
    $content = substr($content, 0, $pos);
    $a=$content;
     $content = str_replace('<li class="inline-list__item inline-list__item--bulleted">','', $a);*/

     //$e = $html->find('.l-column small-7 medium-8 large-9 small-valign-top', 0)->find('li', 1);
     //echo $e->plaintext; // Вернет: foo bar
     //$e = $html->find('li', 0)->innertext;
     //foreach($html->find('li') as $element)
       // echo $element->plaintext . '<br>';
     //$html->find('div')->plaintext;
//if (MySQL_Num_Rows($Result)){
  //$result = MySQL_Query("SELECT * FROM `price` WHERE `idp`='$id'");
  //$c = mysql_fetch_array($result);
//  $price = $c['price'];
//  if($a == $price){
//    echo "був";
//  }
//  else{
//    mysql_Query("INSERT INTO `log`(`idp`) VALUES ('{$id}')");
//    mysql_Query("UPDATE `price` SET `price`='{$a}' WHERE `idp` = '{$id}'");
//  }

//}
//else{
//  mysql_Query("INSERT INTO `price`(`idp`, `price`) VALUES ('{$id}', '{$a}')");
//}

 //echo $c['name'];

 ?>
