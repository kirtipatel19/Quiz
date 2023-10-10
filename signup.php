<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
         body{
                     background:white ;
              }
              div{
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
                     margin-left: 5%;
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
      button{
       width: 95%;
       margin-top: 25px;
       margin-left: 1%;
       height: 30px;
       background:  #5D5C61;
       color: white;
       font-weight: bold;

      }


	</style>
</head>
<body>
   
 <form method="POST" action="signdemo.php">
       <div>
       <center><h1>SIGNUP</h1></center>

 		<label for="Username">Username</label>
 		<input type="name"  name="username">


 		<label for="Email">Email</label>
 		<input type="Email"  name="email">


 		<label for="pwd">Password</label>
 		<input type="Password"  name="password">


 		<label for="confirm Password">Confirm Password</label>
 		<input type="Password"  name="confirmPassword">



 
 		<center><button type="Submit" name="submit">Submit</button></center>
 </div>
 </form>

</body>
</html>