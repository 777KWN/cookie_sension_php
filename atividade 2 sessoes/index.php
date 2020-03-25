<?php 

	session_start(); 	
	if(isset($_SESSION['username']) == true){
		header("Location: index3.php");
	}
?>
<?php
    session_start();
		if(isset($_POST['enviar'])){			
    $password = $_POST['password'];
        $user=$_POST['usuario'];
       $_SESSION['username']=$user;
			if( $password == $_POST['password'] ){
				$_SESSION['password'] = $password;
				header("Location: index3.php");
			}else{
			}
		}
	?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="CONTENT-TYPE" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="css/style.css"/>
    <title>Facebook</title>
   <style>
     
     .face{
color:blue;
padding-left:400px;
}
    .user{
color:red;
padding-left:400px;
}
.password{
padding-left:400px;
}
.btn{

width: 350px; 
text-align:center; 
padding: 15px 20px; 
border: 1px solid #eee;
 border-radius: 6px; 
background-color: #FCC302; 
font-size: 18px;
}
.text{
font-size:40px;

}
.tex{

font-size:40px;

}
   </style>
    </head>
  <body>
    <h1 class="face">Facebook</h1>
<form enctype="multipart/form-data" method="post" action="
  ">
  <label  class="user">NOME</label>
    <input type="text" name="usuario"  placeholder="Usuario."><br>
  <label  class="password"  >SENHA</label>
	<input type="password" name="password" placeholder="Senha."><br>
	<button class="btn"  type="submit" name="enviar">começar</button>
</body>
</html>
  