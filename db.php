<?php

$host = 'localhost';
$login = 'root';
$password = '';
$dbname = 'cinema';

$connect = mysqli_connect($host,$login,$password,$dbname);

   if($connect == false)
   {

      echo "Ошибка подключения к БД";
      exit();

   }else if(mysqli_connect_errno())
   {
      printf("Connect failed: %s\n",mysqli_connect_error());

      exit();

   }else
   {
      
   }


?>