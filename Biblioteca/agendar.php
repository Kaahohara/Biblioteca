<?php 
$titulo = $_POST['data'];
$dados = json_decode($titulo, true);
var_dump($dados);

  require("conexao.php");
 session_start();
$login=$_SESSION['login'];
$id=$_SESSION['id'];
$senha=$_SESSION['senha'] ;
 $Vencimento= date("y-m-d",strtotime('+9 days')); 

   $id_l=$_SESSION['id_u'];
   $qtt=$_SESSION['qtt'];

 $qtd=$_SESSION['qtd'];

$total=$qtt-$qtd;
  if ($qtt>=$qtd){
   $sqll = mysqli_query($connect,"INSERT INTO carrinho (nome,id_livro,qtd,data,login) VALUES('$dados','$id_l','1','$Vencimento','$login')") or die("erro");

$historico = mysqli_query($connect,"INSERT INTO historico (nome,qtd,data,vence,login) VALUES('$dados','1','$Vencimento','vence','$login')") or die("erro");

$d=mysqli_query($connect,"UPDATE livros SET qtd =qtd-1 WHERE titulo='$dados'") or die("erro");
      }
?>
