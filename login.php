<?php
  session_start();
 ?>

<?php 
//session_start();
include 'config.php';?>

<?php
$message="";
if(count($_POST)>0) {
//$conn = mysqli_connect("localhost","root","","canteen_delivery_system");
//if (mysqli_connect_errno())
//{
//echo "Failed to connect to MySQL: " . mysqli_connect_error();
//}
$result = mysqli_query($conn,"SELECT * FROM user WHERE username='" . $_POST["userName"] . "' and password = '". $_POST["password"]."'");
$result1=mysqli_query($conn,"SELECT * FROM user WHERE username='" . $_POST["userName"] . "' and password = '". $_POST["password"]."' and type = '1' ");
$count  = mysqli_num_rows($result);
$count1  = mysqli_num_rows($result1);
if($count==0) {
$message = "Invalid Username or Password!";
} else {
$message = "You are successfully authenticated!";
$_SESSION["userid"] = $_POST["userName"];

if($count1==0)
header("Location: user.php");

else {
  
header("Location: admin.php");

}
exit;

}
}
    ?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
     

  <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a81368914c.js"></script>
<style>
      *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
      }

      body{
        font-family: 'Poppins', sans-serif;
        overflow: hidden;
      }

      .wave{
        position: fixed;
        bottom: 0;
        left: 0;
        height: 100%;
        z-index: -1;
      }

      .container{
        width: 100vw;
        height: 100vh;
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-gap :7rem;
        padding: 0 2rem;
      }

      .img{
        display: flex;
        justify-content: flex-end;
        align-items: center;
      }

      .login-content{
        display: flex;
        justify-content: flex-start;
        align-items: center;
        text-align: center;
      }

      .img img{
        width: 500px;
      }

      form{
        width: 360px;
      }

      .login-content img{
        height: 100px;
      }

      .login-content h2{
        margin: 15px 0;
        color: #333;
        font-size: 2.9rem;
      }

      .login-content .input-div{
        position: relative;
        display: grid;
        grid-template-columns: 7% 93%;
        margin: 25px 0;
        padding: 5px 0;
        border-bottom: 2px solid #d9d9d9;
      }

      .login-content .input-div.one{
        margin-top: 0;
      }

      .i{
        color: #d9d9d9;
        display: flex;
        justify-content: center;
        align-items: center;
      }

      .i i{
        transition: .3s;
      }

      .input-div > div{
        position: relative;
        height: 45px;
      }

      .input-div > div > h5{
        position: absolute;
        left: 10px;
        top: 50%;
        transform: translateY(-50%);
        color: #999;
        font-size: 18px;
        transition: .3s;
      }

      .input-div:before, .input-div:after{
        content: '';
        position: absolute;
        bottom: -2px;
        width: 0%;
        height: 2px;
        background-color: #38d39f;
        transition: .4s;
      }

      .input-div:before{
        right: 50%;
      }

      .input-div:after{
        left: 50%;
      }

      .input-div.focus:before, .input-div.focus:after{
        width: 50%;
      }

      .input-div.focus > div > h5{
        top: -5px;
        font-size: 15px;
      }

      .input-div.focus > .i > i{
        color: #38d39f;
      }

      .input-div > div > input{
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        border: none;
        outline: none;
        background: none;
        padding: 0.5rem 0.7rem;
        font-size: 1.2rem;
        color: #555;
        font-family: 'poppins', sans-serif;
      }

      .input-div.pass{
        margin-bottom: 4px;
      }

      a{
        display: block;
        text-align: right;
        text-decoration: none;
        color: #999;
        font-size: 0.9rem;
        transition: .3s;
      }

      a:hover{
        color: #38d39f;
      }

      .btn{
        display: block;
        width: 100%;
        height: 50px;
        border-radius: 25px;
        outline: none;
        border: none;
        background-image: linear-gradient(to right, #32be8f, #38d39f, #32be8f);
        background-size: 200%;
        font-size: 1.2rem;
        color: #fff;
        font-family: 'Poppins', sans-serif;
        text-transform: uppercase;
        margin: 1rem 0;
        cursor: pointer;
        transition: .5s;
      }
      .btn:hover{
        background-position: right;
      }


      @media screen and (max-width: 1050px){
        .container{
          grid-gap: 5rem;
        }
      }

      @media screen and (max-width: 1000px){
        form{
          width: 290px;
        }

        .login-content h2{
          font-size: 2.4rem;
          margin: 8px 0;
        }

        .img img{
          width: 400px;
        }
      }

      @media screen and (max-width: 900px){
        .container{
          grid-template-columns: 1fr;
        }

        .img{
          display: none;
        }

        .wave{
          display: none;
        }

        .login-content{
          justify-content: center;
        }
      }
  </style>



</head>
  <body>
    <!---team :diniki--->
    
</head>
<body>
  <img class="wave" src="img/wave.png">
  <div class="container">
    <div class="img">
      <img src="img/login.svg" style="height: 350px;">
    </div>
    <div class="login-content">
      <form  method="post" >
        <img src="img/avatar.svg">
        <h1 class="title">KCET-Canteen</h1>
        <br>
              <div class="input-div one">
                 <div class="i">
                    <i class="fas fa-envelope"></i>
                 </div>
                 <div class="div">
                    <h5>User Id</h5>
                     <input type="text" id="form3Example3" class="input" name="userName"  autofocus autocomplete="on" required />
                    <!-- <input type="email" class="input" name="email"  autocomplete="off" required> -->
                 </div>
              </div>
              <div class="input-div pass">
                 <div class="i"> 
                    <i class="fas fa-lock"></i>
                 </div>
                 <div class="div">
                    <h5>Password</h5>
                     <input type="password" id="form3Example4" class="input" name="password" autocomplete="off" required />
                  <!--   <input type="password" class="input" name="password"  autocomplete="off" required> -->
                 </div>
              </div>
              <br>
              <button type="submit" class="btn btn-primary btn-block mb-4">
              Login
            </button>
             <p>If You Don't Have An Account</p>
                <a href="register.php">
              <input type="button" class="btn"  value="register now">
                          </input></a>
               </form>
              

            
        </div>
    </div>
    


  <script>
    const inputs = document.querySelectorAll(".input");


    function addcl(){
      let parent = this.parentNode.parentNode;
      parent.classList.add("focus");
    }

    function remcl(){
      let parent = this.parentNode.parentNode;
      if(this.value == ""){
        parent.classList.remove("focus");
      }
    }


    inputs.forEach(input => {
      input.addEventListener("focus", addcl);
      input.addEventListener("blur", remcl);
    });
  </script>
</body>
</html>

    <!---diniki code end here-->  

  
 
