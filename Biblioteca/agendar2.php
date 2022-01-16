 <?php

 $dados=$_SESSION['dados'];  

require("conexao.php");
$login=$_SESSION['login'];
$dados=$_SESSION['dados'];
$senha=$_SESSION['senha'] ;
$Vencimento= date("y-m-d",strtotime('+9 days')); 
$ISBN=$_SESSION['ISBN'];
                
  $sql = "SELECT qtd,inicial from livros  WHERE titulo='$dados'
                ;";

  $qr    = mysqli_query($connect,$sql) or die(mysqli_error());
  while($ln= mysqli_fetch_assoc($qr)){
  
      $qtt  = $ln['qtd'];
    
      $inicial  = $ln['inicial'];
   
}
  if ($qtt>0){

if($dados!=null){
   $q=mysqli_query($connect,"UPDATE livros SET qtd = qtd-1 WHERE titulo='$dados'");

   $sqll = mysqli_query($connect,"INSERT INTO carrinho (nome,id_livro,qtd,data,login) VALUES('$dados','$id_l','1','$Vencimento','$login')") or die("erro");

$historico = mysqli_query($connect,"INSERT INTO historico (nome,qtd,data,vence,login) VALUES('$dados','1','$Vencimento','Certo','$login')") or die("erro");
 

  echo"<script language='javascript' type='text/javascript'>
        alert('Agendado');window.location
        .href='principal.php'</script>";
     unset($_SESSION['dados']);
    
     die();
}}
else if ($qtt<=0){

  echo"<script language='javascript' type='text/javascript'>
        alert('Falta no estoque');window.location
        .href='principal.php'</script>";
     unset($_SESSION['dados']);
    
     die();
}?>
