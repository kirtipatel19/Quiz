<!DOCTYPE html>
<html>
<head>
	<title></title>
   <style type="text/css">
   	
   	body{
                     background:white ;
              }
              .div{
                     width: 400px;
                     height: 450px;
                     border: 5px solid black;
                     align-items: center;
                     justify-content: center;
                     margin-left: 380px;
                     margin-top: 5%;
                     border-radius: 10px;
                     background: white;
                     box-shadow: 10px 10px 6px black;
              }
              h1{
                     margin-left: 5px;
                     text-decoration: underline;
              }
      label{
       font-size: 18px;
       font-weight: bold;
       margin-left: 2%;
     
      }
      input{
       margin-left: 2%;
       width: 94%;
       height: 28px;
       margin-bottom: 10px;
      }
      textarea{
       margin-left: 2%;
       width: 94%;

      }
      #submit{
       width: 95%;
       margin-top: 25px;
       margin-left: 1%;
       height: 30px;
       background: grey;
       color: white;
       font-weight: bold;

      }

       span{
       	font-weight: bold;
       	margin-top: 20px;
       }
   </style>
</head>
<body>
   <form method="POST" action="loginconn.php">
    <div  class="div">
 	<center><h1>Login</h1></center>
 	 	
 		<label>Username</label>
 		<input type="text" name="username">
 	
 		<label>Password</label>
 		<input type="password" name="password">

 		<center><input id="submit" type="submit" name="submit" value="login"></center>
 	<br>

 	<center><span>New User? </span> <a href="signup.php"><span class="sign-up">Signup here</span></a></center>
<br>
 <div>
 	<center><span class="reset">Reset Password?</span></center>
 </div>
 </div>
 </form>
</body>
</html>