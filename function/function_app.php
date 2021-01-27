<?php
function app() {
  require_once("config/config.php");
  require_once("function.php");
  $sql = "SELECT * FROM programs";
  $result = mysqli_query($connection, $sql);

  $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

  foreach ($rows as $row) {
    switch ($row['hrefim']) {
      case '0':
      $foto = "/standart.png";
      break;
    }
      $usersa .= <<<HTML
      <tr>
        <td><a href="{$row['href']}"><img src="{$row['hrefim']}" width="40" height="40" border-radius"100px" alt="lorem"></a></span></td>
        <td><a href="{$row['href']}">{$row['name']}</a></td>
        <td>{$row['category']}</td>
        <td>{$row['reiteng']}</td>
        <td>{$row['price']}</td>
        <td><a href="?mod=app"><i class="icon-heart"></i></a> | <a href="?mod=app"><i class="icon-arrow-down-circle"></i></a> | <a href="?mod=app"><i class=" icon-info"></i></a></td>
      </tr>
HTML;
  }
  include "head.php";
  include "app.php";
  echo $app;
}
 ?>
