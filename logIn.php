<?php
   $connect = mysql_connect("AudiView.local","root","") or die(mysql_error());
   mysql_select_db("AudiView");

   if (isset($_POST["sumbit"])) {
      $login = $_POST["email"];
      $password = md5($_POST["pass"]);

      $query = mysql_query("SELECT * FROM users WHERE password = '$password' ");
   }
?>

<!DOCTYPE html>
<html>

   <head>
      <title>Вход - Audi View</title>
      <?php  include "head.php"; ?>
   </head>

   <body>

      <header class="bg-logIn col-center">
         <div class="filter"></div>
      </header>

      <?php  include "menu.php"; ?>

      <main>

         <div class="row">
            <div class="col-center">
               <div class="title">
                  <h1>Вход в учётную запись</h1>
                  <h3>Введите логин и пароль для авторизации</h3>
               </div>
            </div>
         </div>

         <div class="row">
            <div class="content col-small">
               <div class="content-body">
                  <form class="registration" name="registrationForm" action="" method="post">
                     <label for="email">E-mail</label><input type="text" name="email" required>
                     <label for="pass">Пароль</label><input type="password" name="pass" required>
                     <input type="submit" class="bg-info" name="submit" value="Ввойти" onclick="confirmForm()">
                     <div class="clearfix"></div>
                  </form>
               </div>
            </div>
         </div>

      </main>

      <!-- Footer -->
      <?php  include "footer.php"; ?>

      <div class="up"></div>

   </body>

</html>
