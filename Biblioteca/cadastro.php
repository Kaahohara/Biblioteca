<?php 
    session_start();
$login = $_POST['login'];
    if($log!=null){
       echo"<script language='javascript' type='text/javascript'>
                  alert('Usuário cadastrado com sucesso!');window.location.
                  href='principal.php'</script>";}
$senha = MD5($_POST['senha']);
$nome =$_POST['nome'];
$curso =$_POST['curso'];
$periodo =$_POST['periodo'];
$assuntos =$_POST['assuntos'];
$_SESSION['login']=$login;
$_SESSION['senha']=$senha; 
 $_SESSION['nome']=$nome;
        $connect = mysqli_connect("127.0.0.1:3306","root","");
        $dbname   = "biblioteca";
        mysqli_select_db($connect, $dbname);
        $query_select = "SELECT login FROM usuarios WHERE login ='".$_SESSION['login']."'";
                  $select = mysqli_query($connect,$query_select);
        $array = mysqli_fetch_array($select);
        $logarray = $array['login'];    
              if($logarray ==  $_SESSION['login']){
              echo"<script language='javascript' type='text/javascript'>
                  alert('Esse login já existe!');window.location.
                  href='cadastros.php'</script>";
                die();
              }else{
                $query = "INSERT INTO usuarios(nome_usuario,curso,periodo,assuntos,login,senha) VALUES ('".$_SESSION['nome']."','".$curso."','".$periodo."','".$assuntos."','".$_SESSION['login']."','".$_SESSION['senha']."');";
                  
                $insert = mysqli_query($connect,$query);
                if($insert){

                  echo"<script language='javascript' type='text/javascript'>
                  alert('Usuário cadastrado com sucesso!');window.location.
                  href='principal.php'</script>";

                }else{
                  echo"<script language='javascript' type='text/javascript'>
                  alert('Não foi possível cadastrar esse usuário');window.location
                  .href='cadastros.php'</script>";
                }
            }
?>
