<?php require('../admin/header.php') ?>

<main>

   <form class="form-update" action="../admin/add-script.php" enctype="multipart/form-data" method="post">

      <h3>Добавить новый фильм</h3>
      <input type="text" name="title" placeholder="Название фильма" required>
      
      <input name="file" type="file" require>
      <input type="text" name="description" placeholder="Описание фильма" required>
      <input type="number" name="category" placeholder="Категория" required>
      <input type="text" name="link" placeholder="Ссылка на трейлер" required>
      <button class="btn-add-form" name="btn-add" type="submit"><span class="material-icons">add</span>Добавить</button>
   </form>







</main>



<?php require('../admin/footer.php') ?>