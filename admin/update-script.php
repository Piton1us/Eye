<?php

   require('../db.php');


   $id = $_GET['id'];
   $ImgDelete = $_GET['img'];

   $title = $_POST['title'];
   $description = $_POST['description'];
   $link = $_POST['link'];
   $category = $_POST['category'];
   var_dump($title);
   if(isset($_POST['btn-update'])){

      //Запрос на обновление данных в бд
      $sql = "UPDATE `film` SET `title` = '$title', `description` = '$description',`category` = '$category', `link` = '$link' WHERE id = '$id'";

      $result = mysqli_query($connect,$sql);

      mysqli_close($connect);

      var_dump($sql);



      //переадресация на страницу update.php с текущим id
      header("Location: /admin/update?id=$id");



}



if(isset($_POST['btn-update-images'])){
      
   require('function.php');

   can_upload($file);


   //Записываем переменную img
   //и вызываем функцию из файла fuction.php
   //в которую передаём имя картинки
   $img = make_upload($_FILES['file']);

   $sql = "UPDATE `film` SET `img`='$img' WHERE id='$id' ";
   $result = mysqli_query($connect,$sql);

   mysqli_close($connect);

   make_download();

   //Удаляем в пвпке img картинку
   unlink("../img/$ImgDelete");

   header("Location: /admin/update?id=$id");
}


?>


