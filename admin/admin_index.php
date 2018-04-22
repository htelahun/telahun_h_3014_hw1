<?php
require_once('phpscripts/config.php');
 confirm_logged_in();

 date_default_timezone_set('America/Toronto');
 $time = date('H:m:s');
 $morning = date("12:00:00");
 $noon = date("15:00:00");
 $night = date("23:00:00");

 if($time<$morning)
 {
   $welcome = "Good Morning";
 }

 elseif($time<$noon){
   $welcome = "Good Afternoon";
 }

 else{
   $welcome = "Good Evening";
 }

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>CMS Homepage</title>
    <link rel="stylesheet" href="../css/login.css">
  </head>
  <body>
    <header>
      <ul>
      <li >
        <a class="logout" href="../index.php">LOGOUT</a>
      </li>

      </ul>
    </header>

    <section class="login-box">
    <div class="center-2">
        <?php
        echo "<h1>{$welcome} {$_SESSION['user_name']}!</h1>";

        echo "<p> Your last log in was on : {$_SESSION['user_date']}</p>";

        ?>
    </div>


      <a class="link1 click" href="admin_add.php">CREATE USER</a>
      <a class=" click" href="admin_edit.php">EDIT USER</a>
      <a class="click" href="admin_delete.php">DELETE USER</a>
    </section>
  </body>
</html>
