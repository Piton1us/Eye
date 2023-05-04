<?php

   session_start();
   
   if($_SESSION['name'] == ''){
      header('Location login.php');
   }

   $id_film = $_GET['id'];
   $id_user = $_GET['userid'];
   $page = $_GET['page'];
   $f_name = $_GET['f_name']; 
   $email = $_GET['email'];
   $phone = $_GET['phone'];
   $date = $_GET['date'];
   $time = $_GET['time'];
   $row = $_GET['row'];
   $seat = $_GET['seat'];
   $price = $_GET['price'];

   
   
?>

<?php require("header.php") ?>



<main>
<!--       Форма 1          --> 
<?php if ($page == 1): ?>  


   <form class="form-update" action="order-script?id=<?php echo $id_film ?>&userid=<?php echo $id_user ?>&page=<?php echo $page ?>"  method="post">

      <h3>Бронирование билета</h3>
      <input type="text" name="f_name" placeholder="ФИО" required>
      <input type="tel" name="phone" placeholder="Введите номер телефона" required>
      <input type="email" name="email" placeholder="Введите почту" required>
  
      <button class="btn-add-form" name="next-first" type="submit">Далее</button>

   </form>


   <!--       Форма 2          --> 
   <?php elseif ($page == 2): ?>       
      
   <form class="form-update fix-form" id="2" action="order-script?id=<?php echo $id_film ?>&userid=<?php echo $id_user ?>&page=<?php echo $page ?>&f_name=<?php echo $f_name ?>&email=<?php echo $email ?>&phone=<?php echo $phone ?>"  method="post" >
      <h3>Бронирование билета</h3>

      <input type="date" name="date" placeholder="дата" min="<?= date('Y-m')?>-01" max="<?= date('Y-m')?>-30"  >

         <select name ="time" form="2">
         <option value="0" disabled>Выберите время</option>
            <option value="10:00">10:00</option>
            <option value="11:00">11:00</option>
            <option value="12:00">12:00</option>
            <option value="13:00">13:00</option>
            <option value="14:00">14:00</option>


         </select>
       
     

      <div class="order-btn-div">
         <button class="btn-add-form" name="next-second" type="submit">Далее</button>
         <button class="btn-add-form" name="pre" type="submit">Назад</button>
      </div>

   </form>  


   <!--       Форма 3          --> 
   <?php elseif ($page == 3): ?>  
       
   <form class="form-update fix-form" id="3" action="order-script?id=<?php echo $id_film ?>&userid=<?php echo $id_user ?>&page=<?php echo $page ?>&f_name=<?php echo $f_name ?>&email=<?php echo $email ?>&phone=<?php echo $phone ?>&date=<?php echo $date ?>&time=<?php echo $time ?>"  method="post" >
      <h3>Бронирование билета</h3>

      <select name ="row" form="3" >
         <option value="0" disabled>Выберите ряд</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>

      </select>
        
       <div class="check-box"> 
       <p>Выберите место</p>
         <label>
            1
            <input class="fix-checkbox" type="checkbox" name="seat1" value="1" >
            
         </label> 

         <label>
            2
            <input class="fix-checkbox" type="checkbox" name="seat2" value="2" >
            
         </label> 

         <label>
            3
            <input class="fix-checkbox" type="checkbox" name="seat3" value="3" >
            
         </label> 

         <label>
            4
            <input class="fix-checkbox" type="checkbox" name="seat4" value="4" >
            
         </label> 

         <label>
            5
            <input class="fix-checkbox" type="checkbox" name="seat5" value="5" >
            
         </label> 


         <label>
            6
            <input class="fix-checkbox" type="checkbox" name="seat6" value="6" >
            
         </label> 


         <label>
            7
            <input class="fix-checkbox" type="checkbox" name="seat7" value="7" >
            
         </label> 

         <label>
            8
            <input class="fix-checkbox" type="checkbox" name="seat8" value="8" >
            
         </label> 


         <label>
            9
            <input class="fix-checkbox" type="checkbox" name="seat9" value="9" >
            
         </label> 

         <label>
            10
            <input class="fix-checkbox" type="checkbox" name="seat10" value="10" >
            
         </label> 
      </div> 

      <div class="order-btn-div">
         <button class="btn-add-form" name="next-third" type="submit">Далее</button>
         <button class="btn-add-form" name="pre" type="submit" >Назад</button>
      </div>

   </form>  


   <!--       Форма 4        --> 
   <?php elseif ($page == 4): ?>  
   <form class="form-update fix-form" id="4" action="order-script?id=<?php echo $id_film ?>&userid=<?php echo $id_user ?>&page=<?php echo $page ?>&f_name=<?php echo $f_name ?>&email=<?php echo $email ?>&phone=<?php echo $phone ?>&date=<?php echo $date ?>&time=<?php echo $time ?>&row=<?php echo $row ?>&seat=<?php echo $seat ?>&price=<?php echo $price ?>"  method="post">

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
         <p class="payment-p">Итого к оплате: <?php echo $price ?></p>
      </div>
      <div class="order-btn-div">
         <button class="btn-add-form" name="next-fourth" type="submit">Далее</button>
         <button class="btn-add-form" name="pre" type="submit" >Назад</button>
      </div>

   </form>


   <?php endif; ?>




</main>












<?php require("footer.php") ?>