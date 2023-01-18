<?php if (!isset($_SESSION['logged']) || $_SESSION['logged'] !== true) {

Redirect::to('index');} 
?>
<?php
UsersController::logout();
Redirect::to('login');

?>