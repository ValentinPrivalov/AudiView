<!DOCTYPE html>
<html>

   <head>
      <title>Audi View</title>
      <?php  include "head.php"; ?>
   </head>

   <body>

      <header class="bg-main">
         <div class="filter"></div>
      </header>

      <?php  include "menu.php"; ?>

      <main>

         <div class="row">
            <div class="col-center">
               <div class="title">
                  <img src="logo/logo-icon.png">
                  <h1>Стартовая страница</h1>
                  <h3>Выберите любую интересующую вас тему</h3>
               </div>
               <div class="articles">
                  <?php article("2x2", "content/models/", "models", "Модели", "Линейка одного из найболее популярных брендов в мире", ""); ?>
                  <?php article("1x2", "content/userinfo/", "user", "Личный кабинет", "Информация о пользователе", ""); ?>
                  <?php article("2x2", "content/news/", "news", "Новости", "Узнай подробности из мира автомобилей. Здесь собраны все события, которые происходят с автомобильной промышленностю.", "article-right"); ?>
                  <?php article("1x1", "", "social", "Мы в социальных сетях", "Vkontakte, Facebook, Youtube, Google+, Twitter, Instagram", ""); ?>
                  <?php article("1x1", "content/dev/", "code", "Разработчикам", "", ""); ?>
                  <?php article("2x2", "content/history/", "history", "История", "Открой для себя этапы создания и развития компании, как все начиналося", ""); ?>
                  <?php article("1x2", "registration.php", "reg", "Регистрация", "Присоединяйся к сообществу", ""); ?>
                  <?php article("1x1", "content/feedback/", "feedback", "Обратная связь", "Задайте интересующие вас вопросы", ""); ?>
                  <?php article("1x1", "content/about/", "about", "О нас", "Немного слов о сайте", ""); ?>
                  <div class="clearfix"></div>
               </div>
            </div>
         </div>

      </main>

      <?php  include "footer.php"; ?>

      <div class="up" title="Up"></div>

   </body>

</html>
