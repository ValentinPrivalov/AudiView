<!DOCTYPE html>
<html>

   <head>
      <title>Обратная связь - Audi View</title>
      <?php  include "../../head.php"; ?>
   </head>

   <body>

      <header class="bg-feedback col-center">
         <div class="filter"></div>
      </header>

      <?php  include "../../menu.php"; ?>

      <main>

         <div id="title" class="row">
            <div class="col-center">
               <div class="title">
                  <h1>Обратная связь</h1>
                  <h3>Укажите свое имя, тему обращения и опишите вашу проблему или вопрос.</h3>
                  <h3>В конце оставьте свой е-mail для получения ответа</h3>
               </div>
            </div>
         </div>

         <div id="feedbackForm" class="row">
            <div class="content col-small">
               <div class="content-body">

                  <form id="form" class="feedback" name="feedbackForm" method="post">

                     <label for="name">Имя</label>
                     <input type="text" name="name" onkeyup="correctCount(this, 2)">

                     <label for="theme">Тема</label>
                     <input type="text" name="theme" placeholder="укажите тему обращения" onkeyup="correctCount(this, 3)">

                     <label for="message">Сообщение</label>
                     <div class="textblock">
                        <textarea onkeyup="getCountSymbols(this.value); correctCount(this, 2);" name="message" placeholder="введите ваше сообщение..." maxlength="255"></textarea>
                        <div class="textblock-label">
                           <span id="clearSymbols" class="clear" onclick="clearMessage()"></span>
                           <span id="countSymbols" class="count"></span>
                           <div class="clearfix"></div>
                        </div>
                     </div>

                     <label for="email">E-mail</label>
                     <input type="text" name="email" onkeyup="correctEmail(this)">

                     <input type="button" class="bg-info" name="submit" value="Отправить" onclick="checkForm(this.form)">

                     <div class="clearfix"></div>
                  </form>

               </div>
            </div>
         </div>

         <div id="sentError" class="row">
            <div class="col-center">
               <div class="title title-error">
                  <h1>Введите данные</h1>
                  <h3>Произошла ошибка обработки даных. Заполните все поля и проверте коректность введенных данных.</h3>
               </div>
            </div>
         </div>

         <div id="sentSuccess" class="row">
            <div class="col-center">
               <div class="title title-success">
                  <img src="sentSuccess.png">
                  <h1>Благодарим за отзыв!</h1>
                  <h3>В течении нескольких минут запрос будет обработан и вы получите ответ на указаную почту.</h3>
                  <div class="control">
                     <a href="http://audiview.local/">На главную</a>
                     <a href="http://audiview.local/content/feedback/">Задать ещё вопрос</a>
                  </div>
               </div>
            </div>
         </div>

      </main>

      <?php  include "../../footer.php"; ?>

      <div class="up"></div>

      <script src="script.js"></script>

   </body>

</html>
