<?php require("content.php")?>
<!DOCTYPE html>
<html lang='eng'>
    <head>
        <meta charset ='UTF-8'>
        <meta name='viewport' content="width=device-width, initial-scale=1.0">
        <link rel = 'stylesheet' href="style.css">
        <title> Prouct</title>
    </head>
    <body>
        <div class="container">
            <h1>welcome to my market></h1>
            <div class = "product">
                <lable>product Name</lable>
                <input type='text' name="name" id="name" value="mango"><br><br>
                <label>price</lable>
                <input type='text' name="price" id="prize" value="19"><br><br>
                <button> add to cart</button>
</div>
</body>
</html>

            <div class= "wrapper">
            <span class="minus">-</span>
            <span class="num">1</span>
            <span class="plus">+</span>
          </div>
          <br><br>
          <script>

            const plus = document.querySelector(".plus"),
            minus = document.querySelector(".minus"),
            num = document.querySelector(".num");

            let a = 1

            plus.addEventListener("click",()=>{
                a++;
                num.innerText=a;
                console.log(a)

                
            });

            minus.addEventListener("click",()=>{
                if(a>1){
                    a--;
                    num.innerText=a;}
                });
                </script>