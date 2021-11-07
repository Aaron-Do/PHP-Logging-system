<?php
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Login</title>
   </head>
   <body>
     <style type="text/css">

     #text{
            height: 25px;
            border-radius: 0px;
            padding: 4px;
            border: solid thin #aaa;
            width: 100%;
     }
     #button{
            padding: 10px;
            width: 100px;
            color: #fff;
            background-color: lightblue;
            border: none;
     }
     #box{
            background-color: grey;
            margin:auto;
            width: 300px;
            padding: 20px;
     }
     a{
      list-style: : none;
     }

     </style>
     <div id="box">
       <form method="POST">
         <div style="font-size: 20px; margin: 10px;">Sign-in</div>
          <p><input id="text" type="text" placeholder="username"name="user_name" requiredname></p>
          <p><input id="text"  type="password"placeholder="Enter Password"name="psw" required></p>
        <button id="button"  type="submit">Login</button>
        <label> <input type="checkbox" check="check" name="remember">Remember me </label>
        <p><a href="signup.php">Signup here!</a></p>

       </form>
     </div>
   </body>
 </html>
