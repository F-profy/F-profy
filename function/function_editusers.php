<?php
function editusers() {
  require_once("function.php");
  require_once("config/config.php");
  $sql = "SELECT * FROM users";
  $result = mysqli_query($connection, $sql);

  $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

  foreach ($rows as $row) {
    switch ($row['payement']) {
      case '0':
      $pay = "Стандарт";
      break;
      case '1':
      $pay = "Платний";
      break;
    }
    switch ($row['time_f']) {
      case '1000-01-01';
      $time = "Не дійсний";
      break;

      default:
      $time = "Дійсний до: {$row['time_f']}";
      break;
    }
      $usersa .= <<<HTML
      <tr><td>{$row['id']}</td>
      <td>{$row['login']}</td>
      <td>{$row['email']}</td>
      <td>{$pay}</td>
      <td>{$time}</td>
      <input type="hidden" name="id" value="{$row['id']}">
        <div id="responsive-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h5 class="modal-title">Уведіть дату закінчення платної підкписки</h5>
              </div>
              <div class="modal-body">
                <form method="post">
                  <div class="form-group">
                    <label for="recipient-name" class="control-label mb-10">Уведіть дату у форматі YYYY-MM-DD:</label>
                    <input type="text" name="date_f" class="form-control" id="recipient-name">
                  </div>


              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Закрити</button>
                <button type="submit" name="save_d" class="btn btn-danger">Зберегти</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      <td> <button type="button" class="btn btn-success btn-icon-anim btn-circle" data-toggle="modal" data-target="#responsive-modal" data-whatever="adddol" name="adddol"><i class="fa fa-dollar"></i></button> | <button type="submit" class="btn btn-warning btn-icon-anim btn-circle" name="deldol"><i class="fa fa-power-off"></i></button> | <button type="submit" class="btn btn-info btn-icon-anim btn-circle" name="adddol"><i class="fa fa-trash-o "></i></button></td>

</tr>
HTML;
  }

  if(isset($_POST['save_d'])){
  ////////////////// POST ACTION TO REGISTER NEW ADMIN ////////////////
  $date_f = inject_checker($connection, $_POST['date_f']);
  $id = inject_checker($connection, $_POST['id']);
  if(empty($date_f)){
    $error_msg = "Поле не може бути пустим";
    }
    else{
    $query = " SELECT * FROM users WHERE id = '{$id}' ";

    $run_query = mysqli_query($connection, $query);
    if(mysqli_num_rows($run_query) > 0){

    $query = "UPDATE users SET time_f = '{$date_f}' ";
    $run_query = mysqli_query($connection, $query);
    if($run_query == true){
    $msg_success = "Вітаю вас, Ви успішно додали програму";
    }
    else{
    $error_msg = "Упс... Щось пішло не так,спробуйте пізніше або зверніться у службу підтримки";
    }
  }
}
}
  include "head.php";
  include "editusers.php";
  echo $editusers;
}
 ?>
