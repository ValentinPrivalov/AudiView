<!DOCTYPE html>
<html>

   <head>
      <title>Разработчикам - Audi View</title>
      <?php  include "../../head.php"; ?>
   </head>

   <body>

      <header class="bg-dev col-center">
         <div class="filter"></div>
      </header>

      <?php  include "../../menu.php"; ?>

      <main>

         <div class="row">
            <div class="col-center">
               <div class="title">
                  <h1>Разработчикам</h1>
                  <h3>Здесь собраны все наработки и тестирования систем необходимых разработчикам и дизайнерам</h3>
               </div>
            </div>
         </div>

         <div class="row bg-info">
            <div class="col-center">
               <div class="title title-white">
                  <img src="../../img/JS.png">
                  <h1>JavaScript</h1>
               </div>
            </div>
         </div>

         <div class="row">
            <div class="content col-center">
               <div class="content-header">
                  <div class="description">
                     <img name="content-logo" src="../../img/canvas.png">
                     <p>&lt;canvas&gt;</p>
                  </div>
               </div>
               <div class="content-body">

                  <canvas id="canvas" width="640" height="480">
                     Ваш браузер не поддерживает елемент <b>Canvas</b>
                  </canvas>

                  <div class="control-canvas">

                     <h3>Дорога</h1>
                     <label>Длина</label>
                     <input type="text" id="roadLength" value="1000"><span>px</span><br>
                     <label>Ширина</label>
                     <input type="text" id="roadWidth" value="100"><span>px</span><br>

                     <h3>Разметка</h1>
                     <label>Длина линии</label>
                     <input type="text" id="lineLength" value="50"><span>px</span><br>
                     <label>Ширина линии</label>
                     <input type="text" id="lineWidth" value="3"><span>px</span><br>
                     <label>Отступ слева</label>
                     <input type="text" id="lineLeft" value="20"><span>px</span><br>
                     <label>Шаг разметки</label>
                     <input type="text" id="step" value="20"><span>px</span><br>

                     <h3>Соперники</h1>
                     <label>Позиция самолета</label>
                     <input type="text" id="airplaneLeft" value="30"><span>px</span><br>
                     <label>Позиция автомобиля</label>
                     <input type="text" id="carLeft" value="30"><span>px</span><br>

                     <div class="clearfix"></div>
                     <input type="button" class="bg-info" id="confirm" value="Подтвердить">
                     <div class="clearfix"></div>
                  </div>
                  <div class="clearfix"></div>

               </div>
            </div>
         </div>

         <div class="row">
            <div class="content col-small">
               <div class="content-header">
                  <div class="description">
                     <img name="content-logo" src="../../img/JS.png">
                     <p>Модальное окно</p>
                  </div>
               </div>
               <div class="content-body">

                  <label>Заголовок</label>
                  <input type="text" id="titleM">
                  <label>Текст сообщения</label>
                  <input type="text" id="textM">

                  <div class="clearfix"></div>
                  <button type="button" onclick="showModal()" class="bg-info">Открыть модальное окно</button>
                  <div class="clearfix"></div>

               </div>
            </div>
         </div>

         <div class="row bg-info">
            <div class="col-center">
               <div class="title title-white">
                  <img src="../../img/PHP.png">
                  <h1>PHP</h1>
               </div>
            </div>
         </div>

         <div class="row">
            <div class="content col-center">
               <div class="content-header">
                  <div class="description">
                     <img name="content-logo" src="../../img/PHP.png">
                     <p>PHP</p>
                  </div>
               </div>
               <div class="content-body">

                  <?php
                     $start = time();

                     echo "Сегодня ".Date("d.m.y, h:i:s", $start)."<br>";

                     echo "<div class='content content-body'>"."<h3>Files</h3>";
                     $file = "PHP_test.txt";
                     if (file_exists($file)) {
                        $fileContent = file_get_contents($file);
                        echo "Файл загружен<br>";
                        echo "Вместимость файла: <mark>".$fileContent."</mark><br>";
                        echo " Количество слов: <mark>".str_word_count($fileContent);
                        echo "</mark>. Количество символов: <mark>".strlen($fileContent)."</mark><br>";
                     } else {
                        echo "Файл не найден<br>";
                     }
                     echo "</div>";

                     echo "<div class='content content-body'>"."<h3>Информация о сервере</h3>";
                     echo $_SERVER['PHP_SELF']."<br>";
                     echo $_SERVER['SERVER_NAME']."<br>";
                     echo $_SERVER['HTTP_HOST']."<br>";
                     echo $_SERVER['HTTP_REFERER']."<br>";
                     echo "Браузер: ".$_SERVER['HTTP_USER_AGENT']."<br>";
                     echo $_SERVER['SCRIPT_NAME']."</div>";

                     $diff = microtime(true) - $start;
                     $rounding = round($diff*10000,-1)/10000;
                     echo "Время загрузки страницы: ".$rounding." сек.<br>";
                  ?>
               </div>
            </div>
         </div>

      </main>

      <?php  include "../../footer.php"; ?>

      <div class="up"></div>

      <div id="modal">
         <div id="modalWindow">
            <h2 id="modalTitle"></h2>
            <span id="modalText"></span>
            <div class="clearfix"></div>
            <button type="button" onclick="closeModal()" class="bg-info right">Закрыть</button>
            <div class="clearfix"></div>
         </div>
      </div>

      <script src="script.js"></script>

   </body>
</html>
