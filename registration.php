<?php
   $connect = mysql_connect("AudiView.local","root","") or die(mysql_error());
   mysql_select_db("AudiView");

   if (isset($_POST["submit"])) {
      $name = $_POST["name"];
      $email = $_POST["email"];
      $password = $_POST["password"];
      $r_password = $_POST["r_password"];
      if ($password == $r_password) {
         $password = md5($password);
         $query = mysql_query("INSERT INTO users VALUES('','$name','$password','$email')") or die(mysql_error());
      }
      else {
         die("Password must match");
      }
   }
?>

<!DOCTYPE html>
<html>

   <head>
      <title>Registration</title>
      <?php  include "head.php"; ?>
   </head>

   <body>

      <header class="bg-reg col-center">
         <div class="filter"></div>
      </header>

      <?php  include "menu.php"; ?>

      <main>

         <div class="row">
            <div class="col-center">
               <div class="title">
                  <h1>Регистрация нового пользователя</h1>
                  <h3>Заполните поля отмеченные *</h3>
               </div>
            </div>
         </div>

         <div class="row">
            <div class="content col-small">
               <div class="content-body">
                  <div class="user-info">
                     <img src="img/default_logo.jpg">
                  </div>
                  <form class="registration" name="registrationForm" action="" method="post">
                     <label for="name">Имя<span>*</span></label><input type="text" name="name" required>
                     <label for="email">E-mail<span>*</span></label><input type="text" name="email" required>
                     <label for="pass">Пароль<span>*</span></label><input type="password" name="pass" required>
                     <label for="r_pass">Подтвердите пароль<span>*</span></label><input type="password" name="r_pass" required>
                     <input type="submit" class="bg-info" name="submit" value="Зарегистрироваться" onclick="confirmForm()">
                     <div class="clearfix"></div>
                  </form>
               </div>
            </div>
         </div>

      </main>

      <?php  include "footer.php"; ?>

      <div class="up"></div>

   </body>

</html>
