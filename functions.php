<?php
   function modelListElem($img, $model, $price) {
      echo "<a href=''>
               <img src='http://audiview.local/content/models/".$img."'>
               <div class='list-title'>
                  <h3>".$model."</h3>
                  Цена: <span>".$price."</span>
               </div>
               <div class='clearfix'></div>
            </a>";
   }

   function article($size, $a, $bg, $h3, $span, $float) {
      echo "<div class='article article-$size $float'>
               <div class='bg bg-$bg'>
                  <div class='filter'>
                  <div class='filter-rev'>
                     <div class='article-content'>
                        <h3>$h3</h3>
                        <div class='line'></div>
                        <span>$span</span>
                        <a href='http://audiview.local/$a'>Подробнее<em class='fa fa-caret-right'></em></a>
                     </div>
                  </div>
                  </div>
               </div>
            </div>";
   }

   function newsArticle($a, $h3, $span) {
      echo "<div class='article article-4x2'>
               <div class='bg' style='background-image: url(http://audiview.local/content/news/$a/img_1.jpg);'>
                  <div class='article-news'>
                     <h3>$h3</h3>
                     <div class='subtitle'>
                        <div class='line'></div>
                        <span>$span</span>
                        <a href='http://audiview.local/content/news/$a/'>Читать статью полностью<em class='fa fa-caret-right'></em></a>
                     </div>
                  </div>
               </div>
            </div>";
   }

   function dropdown() {
      echo "<div class='dropdown'>
               <div class='dropdown-button'><em class='fa fa-bars'></em></div>
               <div class='dropdown-menu'>
                  <button><em class='fa fa-pencil'></em>Редактировать</button>
                  <button><em class='fa fa-files-o'></em>Копировать</button>
                  <button name='share'><em class='fa fa-share'></em>Поделиться</button>
                  <div class='social'>
                     <a href=''><em class='fa fa-vk'></em></a>
                     <a href=''><em class='fa fa-facebook-official'></em></a>
                     <a href=''><em class='fa fa-twitter'></em></a>
                     <a href=''><em class='fa fa-youtube'></em></a>
                  </div>
                  <button name='drop'><em class='fa fa-chevron-up'></em>Свернуть</button>
               </div>
            </div>";
   }
?>
