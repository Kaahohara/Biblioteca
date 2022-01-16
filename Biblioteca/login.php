<?php 
session_start();
$login = $_POST['login'];
$senha = MD5($_POST['senha']);

 $_SESSION['login']=$login;
 $_SESSION['senha']=$senha;
$entrar = $_POST['entrar'];

$connect = mysqli_connect("127.0.0.1:3306","root","");
$dbname   = "biblioteca";
mysqli_select_db($connect, $dbname);
  if (isset($entrar)) {

    $verifica = mysqli_query($connect,"SELECT * FROM usuarios WHERE login = 
    '$login' AND senha = '$senha'") or die("erro ao selecionar");
      if (mysqli_num_rows($verifica)<=0){
        echo"<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location
        .href='index.php'</script>";
        die();
    
      }else{
       
          $sql = mysqli_query($connect,"INSERT INTO usuarios VALUES('$nome','$login','$senha')");
          $entrei=$entrei+1;
      $_SESSION['first']= $entrei;
  header("location: menu.php");

   

      }
  }
  
?>