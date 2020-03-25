

<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="CONTENT-TYPE" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="css/style.css"/>
    <title>formulário</title>
    </head>
    <style>
        .f{
color:blue;
font-size:30px;
margin: 0 auto ; 
height:50px;
width:50px;
}
#caract{
background-color:red;
color:green;
}
.gt{
withg:50px;
heigth:50px;

}
#caract{ 
padding-left:100px;

}
#nom{
padding-left:340px;
}
#j{
padding:18px;
color:aquamarine;
}
#nome{

font-size:40px;
padding-left:40px;
}

               
    </style>
    <body bgcolor="gray">
        <h1 class="f">FORMULÁRIO</h1>
        
        <?php
if(isset($_COOKIE['nome']) && isset($_GET['deletecookie'])){
    unset($_COOKIE['nome']);
     
} if(isset($_POST['caract'])){
    setcookie('nome', $_POST['caract']);
    header("location: index.php");
}else{ 
    if(isset($_COOKIE['nome'])){
        echo  $_COOKIE ['nome']; 
    echo "<a id='nome' href='?deletecookie=true' ><br><button id='j'>restaurar pagina</button></a>"; 
    }else{ 
?>
<form method="POST" action="index.php">
    <label id="nom">NOME</label>
    <input type="text" id="caract" name="caract" placeholder="Nome">
    <button type="submit" value="Enviar" id ="gt">SALVAR</button>
</form>
<?php } } ?>
    </body>
    </html>
