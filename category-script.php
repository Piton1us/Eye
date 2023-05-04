<?php 

var_dump($_POST);

$id_category = $_POST['categories'];

header("Location: index?id_category=$id_category")







?>