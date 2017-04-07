<!DOCTYPE html>
<html>

   <head>
      <title>Новости - Audi View</title>
      <?php  include "../../head.php"; ?>
   </head>

   <body>

      <header class="bg-news col-center">
         <div class="filter"></div>
      </header>

      <?php  include "../../menu.php"; ?>

      <main>

         <div class="row">
            <div class="col-center">
               <div class="title">
                  <h1>Новостная лента</h1>
                  <h3>Выберите любую интересующую вас тему</h3>
               </div>
            </div>
         </div>         

         <div class="row">
            <div class="col-center">
               <div class="articles">
                  <?php newsArticle("1", "Audi RS4 Avant впервые засветился на тестах", "Немецкая автомобильная компания Audi отправила на первые зимние испытания свой новый RS4 Avant. Новинка впервые была замечена фотошпионами на дорогах Европы."); ?>
                  <?php newsArticle("2", "Audi обновила самый быстрый хэтчбек в мире", "Компания Audi рассекретила обновленную RS3 в кузове хэтчбек. Публичный дебют новинки состоится на автосалоне в Женеве. Продажи самого быстрого хэтчбека в мире на европейском рынке начнутся в апреле нынешнего года."); ?>
                  <div class="clearfix"></div>
               </div>
            </div>
         </div>

      </main>

      <?php  include "../../footer.php"; ?>

      <div class="up"></div>

   </body>

</html>
