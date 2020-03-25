<?php
	session_start(); 
	if(!isset($_SESSION['password']) == true){         
		unset($_SESSION['password']);
header("Location:index.php");
}    
echo"  Olá:".$_SESSION['username'].'<br>';
echo"  aproveite o facebook a melhor plataforma para postar e ver postagens de fotos"
?>
