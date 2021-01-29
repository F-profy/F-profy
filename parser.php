<?php

ini_set("display_errors",1);
error_reporting(E_ALL);
require_once("function/function.php");
require_once("config/config.php");


for ($o=1; $o < 3 ; $o++) {
  $site = "https://apps.apple.com/ua/genre/ios-ігри/id6014?l=uk&letter=B&page=1#page";
 $content = file_get_contents("{$site}");//силка
 $pos = strpos($content, 'class="grid3-column">' );
 $content = substr($content, $pos);
 $pos = strpos($content, '<div id="genre-nav"');
 $content = substr($content, 0, $pos);
 $a=$content;
$healthy = array("<ul>", "</ul>", "</div>",'<div class="column first">',' <div class="column">',' <div class="column last">',"<li>","</li>",'class="grid3-column">');
$yummy   = array("", "", "","","","","","","");
$a = str_replace($healthy, $yummy, $a);
$c = $a;

for ($i=0; $i < 100; $i++) {
  $pos = strpos($c, '">');
  $content = substr($c, $pos);
  $pos = strpos($content, '</a>');
  $content = substr($content, 0, $pos);
  $name = $content;
  $healthy = array('">');
  $yummy   = array("");
  $name = str_replace($healthy, $yummy, $name);

  $pos = strpos($c, '<a href="');
  $content = substr($c, $pos);
  $pos = strpos($content, '">');
  $content = substr($content, 0, $pos);
  $site = $content;
  $healthy = array('<a href="');
  $yummy   = array("");
  $site = str_replace($healthy, $yummy, $site);
 $healthy = array('<a href="'.$site.'">'.$name.'</a>');
 $yummy   = array("");
 $c = str_replace($healthy, $yummy, $c);

 $query = " SELECT * FROM programs WHERE name = '".mysqli_real_escape_string($connection, $name)."' or href = '".mysqli_real_escape_string($connection, $site)."' ";
 if($run_query = mysqli_query($connection, $query)){

 if(mysqli_num_rows($run_query)){
 echo ".";
 }
else{

  $query = " INSERT INTO programs(name, href)
  VALUES('$name', '$site')";
  $run_query = mysqli_query($connection, $query);

  $content = file_get_contents("{$site}");//силка
  $pos = strpos($content, 'class="we-artwork ember-view product-hero__artwork we-artwork--fullwidth we-artwork--ios-app-icon">' );
  $content = substr($content, $pos);
  $pos = strpos($content, ' 1x,https');
  $content = substr($content, 0, $pos);
  $a=$content;
  $healthy = array('class="we-artwork ember-view product-hero__artwork we-artwork--fullwidth we-artwork--ios-app-icon">','<source class="we-artwork__source" srcset="', ' ');
  $yummy   = array("","","");
 $a = str_replace($healthy, $yummy, $a);
 $a = trim($a, " \n");
 $a = trim($a, " ");
 echo $a;

}
}
}
}

 ?>
