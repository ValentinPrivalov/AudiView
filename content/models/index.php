<!DOCTYPE html>
<html>

   <head>
      <title>Модели - Audi View</title>
      <?php  include "../../head.php"; ?>
   </head>

   <body>

      <header class="bg-models col-center">
         <div class="filter"></div>
      </header>

      <?php  include "../../menu.php"; ?>

      <main>

         <div class="row">
            <div class="col-center">
               <div class="title">
                  <h1>Модели</h1>
                  <h3>Линейка одного из найболее популярных брендов в мире</h3>
               </div>
            </div>
         </div>

         <div class="row">
            <div class="col-center">
               <?php  include "CarList.php"; ?>
            </div>
         </div>

      </main>

      <?php  include "../../footer.php"; ?>

      <div class="up"></div>

   </body>

</html>
