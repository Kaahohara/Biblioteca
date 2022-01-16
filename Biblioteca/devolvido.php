
<?php 
session_start();
$id_ca = $_POST['data'];

$id = json_decode($id_ca, true);

$titulo = $_POST['data'];

$dados = json_decode($titulo, true);
var_dump($id);
var_dump($dados);

  require("conexao.php");
  
  $q=mysqli_query($connect,"UPDATE livros SET qtd = qtd+1 WHERE titulo= '$dados'");
$d=mysqli_query($connect,"DELETE FROM carrinho
WHERE nome = '$dados'"); 

 $de = mysqli_query($connect,"UPDATE historico SET devolucoes =devolucoes+1 WHERE nome ='$dados'");

$dei = mysqli_query($connect,"UPDATE livros SET devolucoes =devolucoes+1 WHERE titulo ='$dados'");
 


        $connect = mysqli_connect("127.0.0.1:3306","root","");
        $dbname   = "biblioteca";
        mysqli_select_db($connect, $dbname);


?>
