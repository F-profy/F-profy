<?php
//////////// FUNCTION TO REMOVE SLASHES AND TO REMOVE SPACES //////////

function register(){
require_once("function.php");
require_once("config/config.php");
$date = date('d/m/Y');

if(isset($_POST['reg_btn'])){
////////////////// POST ACTION TO REGISTER NEW ADMIN ////////////////
$reg_name = inject_checker($connection, ucwords($_POST['login']));
$reg_username = inject_checker($connection, strtolower($_POST['name']));
$reg_password1 = inject_checker($connection, $_POST['password']);
$reg_password2 = inject_checker($connection, $_POST['repassword']);
$reg_phone = inject_checker($connection, ucwords($_POST['email']));

/////////// ERROR CHECKING FOR EMPTY FILEDS
if(empty($reg_name)){
$error_msg = "Поле Логін не може бути пустим";
}
elseif(empty($reg_username)){
$error_msg = "Поле Ім'я не може бути пустим";
}
elseif(empty($reg_password1)){
$error_msg = "Поле Пароль не може бути пустим";
}
elseif($reg_password1 !== $reg_password2){
$error_msg = "Поле Повторіть пароль не може бути пустим";
}
elseif(empty($reg_phone)){
$error_msg = "Поле E-Mail не може бути пустим";
}
else{
$query = " SELECT * FROM users WHERE name = '{$reg_username}' ";
$run_query = mysqli_query($connection, $query);

if(mysqli_num_rows($run_query) > 0){
$error_msg = "Помилка: ця користувач уже існує";
}else{
$query = " INSERT INTO users(login, name, password, email, reg_date)
VALUES('$reg_name', '$reg_username', '$reg_password1', '$reg_phone', '$date')";
$run_query = mysqli_query($connection, $query);

if($run_query == true){
$msg_success = "Вітаю вас, Ви успішно зареєстровані";
}else{
$error_msg = "Упс... Щось пішло не так,спробуйте пізніше або зверніться у службу підтримки";
}
}
}
}
//Close Connection
mysqli_close($connection);
include "signup.php";
echo $register;
}
?>
