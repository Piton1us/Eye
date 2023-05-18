<?php
   //Функция проверки фотограции
   function can_upload($file){

      if($file['name'] ==''){
         return 'Вы не выбрали файл';
      }

      //Если размер файла 0, значит его не пропустили настройки сервера из-за того что он млищеом большой
      if($file['$size'] == 0){
         return 'Файл слишком большой';
      }

      $getMime = explode('.',$file['name']);

      $mime = strtolower(end($getMime));

      $types = array('jpg','png','gif','bmp','jpeg','mp4','webp');

      if(!in_array($mime,$types)){
         return 'Недопустимый файл';

      }

      return true;

   }

   //Функция создания уникального имени фото и создании копии в папку img
   function make_upload($file){

      //Формируем уникальное имя картинки: случайное число и name
      $nameImg = date("d-m-Y-H-i-s") . '-' . $file['name'];
      var_dump("имя файла".$file['name']);
      
      copy($file['tmp_name'], '../img/' . $nameImg);

      return $nameImg;

   }

   //Функция загрузки фотогрфии
   function make_download(){

      //Если была произведена отправка формы
      if(isset($_FILES['file'])){

         // проверяем, можно ли загрузить изображение
         $check = can_upload($_FILES['file']);
      

         if($check === true){
            //загружаем изображение на сервер
            make_upload($_FILES['file']);

             echo "<strong>Файл успешео загружен </strong>";
         }else{
            //выводим сообщение об ошибке
            echo "<strong>$check </strong>";
         }
      }
   }




?>