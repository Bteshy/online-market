<?php require("content.php")?>
<!DOCTYPE html>
<html lang='eng'>
    <head>
        <meta charset ='UTF-8'>
        <meta name='viewport' content="width=device-width, initial-scale=1.0">
        <link rel = 'stylesheet' href="style.css">
        <title> PAYMENT</title>
    </head>
    <body onload="multiplty();">
        <form action ="" method="post">
            <h2>Payment method</h2>
            <label> product price</label>
            <input type ="text" name="price" id="price" value="24" onblur="multiply()"><br><br>
          <lable>Quantity</lable>
          <input type ="number" name="quantity" id="quantity" value="1" onblur="multiply()"> <br><br>
          
          <label>Total price</label>
            <input type="text" name="total" id="total"><br><br>
          <br>
            <label for ="phone"> Enter phone number</label>
            <input type="tel" id ="phone" name="phone"><br><br>
           
           
            <button type="submit" name="submit"> submit</button>
            
            <p class="error"><?php echo @$error ?></p>
            <p class="success"><?php echo @$success  ?></p>
        </form>
        
      <script>
        function multiply(){
            var price = document.getElementById("price").value;
            var quantity = document.getElementById("quantity").value;
            var total = Parsefloat(price)* Parsefloat(quantity);
            document.getElementById("total").value = total;
        }
        </script>

       
    </body>
</html>