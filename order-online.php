<?php

   session_start();
   
   if($_SESSION['name'] === ''){
      header('Location: login.php');
   }

   $id_film = $_GET['id'];
   $id_user = $_GET['userid'];
   $price = $_GET['price'];

   
   
?>

<?php require("header.php") ?>




<form class="form-update fix-form" id="4" action="order-online-script.php"  method="post">

      <h2>Оплата</h2>
      <div class="payment">
         <div class="payment-box">
            <input class="payment-input" type="radio" id="payment1" name="payment" value="cash">
            <span>Наличными</span>
         </div>

         <div class="payment-box">
            <input class="payment-input" type="radio" id="payment2" name="payment" value="card">
            <span>Картой</span>
         
         </div>
         <p class="payment-p">Итого к оплате: 299 р. <?php echo $price ?></p>
      </div>
      <div class="order-btn-div">
         <button class="btn-add-form" name="next-fourth" type="submit">Далее</button>
         <button class="btn-add-form" name="pre" type="submit" >Назад</button>
      </div>

   </form>

















<?php require("footer.php") ?>