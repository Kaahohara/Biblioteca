<?php 
  session_start(); 

      if(!isset($_SESSION['carrinho'])){ 
       $_SESSION['carrinho'] = array(); 
      } //adiciona produto 
      
      if(isset($_GET['acao'])){ 
        //ADICIONAR CARRINHO 
        if($_GET['acao'] == 'add'){ 
        $id = intval($_GET['id']); 
        if(!isset($_SESSION['carrinho'][$id])){ 
        $_SESSION['carrinho'][$id] = 1; 
      }
       else { 
          $_SESSION['carrinho'][$id] += 1; 
      } 
      }

       //REMOVER CARRINHO 
      
        if($_GET['acao'] == 'del'){ 
          $id = intval($_GET['id']); 
          if(isset($_SESSION['carrinho'][$id])){ 
          unset($_SESSION['carrinho'][$id]); 
      } 
      }

       //ALTERAR QUANTIDADE 
        if($_GET['acao'] == 'up'){ 
          if(is_array($_POST['prod'])){ 
          foreach($_POST['prod'] as $id => $qtd){
          $id  = intval($id);
          $qtd = intval($qtd);
          if(!empty($qtd) || $qtd <> 0){
          $_SESSION['carrinho'][$id] = $qtd;
          }else{
          unset($_SESSION['carrinho'][$id]);
       }

       }
       }
       }
       }
         
          
?>



<html>
  <head>
    <title>Biblioteca Online</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/botoes.css" />






  </head>
  <body class="is-preload">

    <!-- Header -->
      <header id="header">
        <a class="logo" href="principal.php">Biblioteca</a>
        <nav>
          <a href="#menu">Menu</a>
        </nav>
      </header>

    <!-- Nav -->
      <nav id="menu">
        <ul class="links">
    <?php
            echo'

            <li><a href="principal.php">Home</a></li>
            <li><a href="carrinho.php">Agendar livros</a></li>
     
        <li>
   
<a href="sair.php">Sair</a> </li> </ul>
        </nav>
'
?>


        
              
  
         

<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #ff0000;
  color: white;
}
</style>
</head>
<body>

          

<table id="customers">
     <?php


echo'  <tr>
 <th width="350"></th>
    <th width="350">ID</th>
          <th width="350">Nome</th>
  
      
         <th width="350">Agendar</th>
                 <th width="350">Renovar</th>
        <th width="350">Remover</th>
   
            </tr>
          </thead>
          
    <tfoot>
      <tr>
        <td>
 
<input class="bt" type="submit" value="Atualizar Carrinho"  class="btn btn-primary"/>
</a></td>
</a></td>
   <td>
<a class="bt" href="principal.php"title=""class="btn btn-primary">Voltar</a></td>
</font></a>
    </tr><br><br><br><br><br><br><br><br>
          <tbody bgcolor="white">
            <tr>
   ';
   if(count($_SESSION['carrinho']) == 0){
          echo '
        <tr>
          <td colspan="5">Não há produto no carrinho</td>
        </tr>
      ';
           $id=$_SESSION['id'];
          } else {
                require("conexao.php");
     
             foreach($_SESSION['carrinho'] as $id => $qtd)


                        $sql   = "SELECT * FROM livros WHERE id= '$id' 
                     ";

 $qr    = mysqli_query($connect,$sql) or die(mysqli_error());
 while($ln= mysqli_fetch_assoc($qr)){

 $titulo  = $ln['titulo'];
$id_u=$ln['id'];
$img=$ln['img'];
  $qtt  = $ln['qtd'];
$_SESSION['qtt']=$qtt;

$total=$qtt-$qtd;
 $_SESSION['qtd']=$qtd;

 $_SESSION['titulo']=$titulo;


  $_SESSION['id_u']=$id_u; 

   echo ' <td>
                <h4>      <center> <img src="images/'.$ln['img'].'" width=130" height="100"/><br></center>
                </td>
                 <td class="cart_description" >
                  <font size="2" color="black">'.$id.'</font>
                 </td>
                 <td class="cart_description" > <font size="2" color="black">'.$titulo.'</font>
                 </td>
    <td class="oi" >
  <a class="cart_quantity_delete"  href="?acao=ad&id='.' '.$id.' " name="ad['.$id.']"><i class="fa fa-times"></i></a>
              </td>
     <td class="oi" >
  <a class="cart_quantity_delete"  href="?acao=re&id='.' '.$id.' " name="re['.$id.']"><i class="fa fa-times"></i></a>
              </td>
           ';   echo '
   <td class="oi" >
                <a class="cart_quantity_delete"  href="?acao=del&id='.' '.$id.'" value="Agendar"><i class="fa fa-times"></i></a>
              </td>
        

</tr>';   echo '
         </div></form>
      ';

 }}

    ?>      </table>
    <?php


echo'      
    <div id="all">

      <div id="heading-breadcrumbs">
  <section id="cart_items">
    <div class="container">
    
      <div class="table-responsive cart_info">
        <table class="table table-condensed">
          <thead>
            <tr class="cart_menu"><tr>
<br><BR>
    <th width="350">ID</th>
          <th width="350">ISBN</th>      
         <th width="350">Titulo</th>
                 <th width="350">Quantidade</th>
        <th width="350">Endereçamento</th>
        <th width="350">Validade</th>
   
            </tr>
          </thead>
          
 
        
   ';

                require("conexao.php");
          $login=$_SESSION['login'];
                      
                        $sql = "SELECT a.id, a.nome, a.qtd,a.data,a.login,a.vence,b.enderecamento,b.ISBN
FROM carrinho as A
INNER JOIN livros as B
                on a.nome = b.titulo WHERE login='$login'
                ;";

 $qr    = mysqli_query($connect,$sql) or die(mysqli_error());
 while($ln= mysqli_fetch_assoc($qr)){
  $id=$ln['id']; 
   $isbn=$ln['ISBN'];
     $enderecamento=$ln['enderecamento'];
 $titulo  = $ln['nome'];
  $qtd  = $ln['qtd'];
 $data  = $ln['data'];
  $vence  = $ln['vence'];

    
      echo '<td>'.$id_u.'</td>';
   echo ' <td class="cart_description" > <font size="2" color="black">'.$isbn.'</font>
                 </td>
    <td class="cart_description" > <font size="2" color="black">'.$titulo.'</font>
                 </td>
    <td class="cart_description" > <font size="2" color="black">'.$qtd.'</font>
                 </td>
    <td class="cart_description" > <font size="2" color="black">'.$enderecamento.'</font>
                 </td>
    <td class="cart_description" > <font size="2" color="black">'.$data.'</font>
                 </td>
       
           

</tr>';   echo '
         </div></form>
      '
     ; }
    ?>      
  
       <?php

$connect = mysqli_connect("127.0.0.1:3306","root","");
$dbname   = "biblioteca";
mysqli_select_db($connect, $dbname);
  require("conexao.php");
              if(!isset($_SESSION['carrinho'])){ 
    $_SESSION['carrinho'] = array(); 
  } //adiciona produto 
  
  if(isset($_GET['acao'])){ 
    if($_GET['acao'] == 'ad'){ 
   $id = intval($_GET['id']); 
            $id  = intval($id);
            $qtd = intval($qtd);
      if(isset($_SESSION['carrinho'][$id])){

$titulo=$_SESSION['titulo'];
$login=$_SESSION['login'];
$id=$_SESSION['id'];
$senha=$_SESSION['senha'] ;
 $Vencimento= date("y-m-d",strtotime('+9 days')); 


  if ($qtt>=$qtd ){
   $id_l=$_SESSION['id_u'];
$sqll = mysqli_query($connect,"INSERT INTO carrinho (nome,id_livro,qtd,data,login) VALUES('$titulo','$id_l','1','$Vencimento','$login')") or die("erro");

$historico = mysqli_query($connect,"INSERT INTO historico (nome,qtd,data,vence,login) VALUES('$titulo','$qtd','$Vencimento','vence','$login')") or die("erro");

echo"<script language='javascript' type='text/javascript'>
        alert('Agendado');window.location
        .href='carrinho.php'</script>";

$d=mysqli_query($connect,"UPDATE livros SET qtd ='$total' WHERE titulo='$titulo'") or die("erro");
      
  }
 else {
    echo "<script language='javascript' type='text/javascript'>
        alert('Falta no estoque');window.location
        .href='carrinho.php'</script>";
 }
    }
            }
}
 ?>

 <?php
$connect = mysqli_connect("127.0.0.1:3306","root","");
$dbname   = "biblioteca";
mysqli_select_db($connect, $dbname);
  require("conexao.php");
              if(!isset($_SESSION['carrinho'])){ 
    $_SESSION['carrinho'] = array(); 
  } //adiciona produto 
  
  if(isset($_GET['acao'])){ 
    if($_GET['acao'] == 're'){ 
   $id = intval($_GET['id']); 
            $id  = intval($id);
            $qtd = intval($qtd);
      if(isset($_SESSION['carrinho'][$id])){


  require("conexao.php");
$login=$_SESSION['login'];

   $at = "SELECT * from carrinho where nome='$titulo' AND login='$login'
                ;";
 $qr  = mysqli_query($connect,$at) or die(mysqli_error());
 while($ln= mysqli_fetch_assoc($qr)){
  $id=$ln['id'];
}
 $ca = "SELECT * from carrinho where id='$id'
                ;";
 $qr  = mysqli_query($connect,$ca) or die(mysqli_error());
 while($ln= mysqli_fetch_assoc($qr)){
$ree=$ln['renovacoes'];
$login=$_SESSION['login'];
$senha=$_SESSION['senha'];
$renovacoe=$ree+1;
 $Vencimento= date("y-m-d",strtotime('+9 days'));  
$timestamp = strtotime('+9 day', strtotime($Vencimento));
$time = date('y-m-d',$timestamp);

$_SESSION['time']=$time;

if($renovacoe>1){

echo"<script language='javascript' type='text/javascript'>
        alert('Só pode renovar uma vez');window.location
        .href='carrinho.php'</script>";
}else{
 
    
$re = mysqli_query($connect,"UPDATE carrinho SET renovacoes ='1' WHERE id='$id'") or die("erro");

$re = mysqli_query($connect,"UPDATE historico SET renovacoes ='1' WHERE id='$id'") or die("erro");

$re = mysqli_query($connect,"UPDATE historico SET data ='$time' WHERE id='$id'") or die("erro");

$reo = mysqli_query($connect,"UPDATE carrinho SET data ='$time' WHERE id='$id'") or die("erro"); 
 
$q=mysqli_query($connect,"UPDATE historico SET qtd ='$qtd' WHERE id='$id'");
      




echo"<script language='javascript' type='text/javascript'>
        alert('Renovado');window.location
        .href='carrinho.php'</script>";

  }
    
}}}}?> </table>
      <BR><BR>
 
               
  <!-- Footer -->
    </BR></tr></tbody></td></tr>
</tfoot></form></table></div></div></section>
          <br><BR>  <hr>  <center>
<tr>
              <p>Desenvolvido por Karina Lira Ohara, Leonardo Salles e Tallison</p>
</center>
        <!-- Scripts -->
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/browser.min.js"></script>
      <script src="assets/js/breakpoints.min.js"></script>
      <script src="assets/js/util.js"></script>
      <script src="assets/js/main.js"></script>

  </body>
</html>

