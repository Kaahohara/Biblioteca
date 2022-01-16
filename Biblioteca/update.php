<?php 
    session_start();
$titulo = $_POST['titulo'];
$qtd =$_POST['qtd'];

   
                require("conexao.php");
            $sql = "SELECT * from livros WHERE titulo='$titulo' ";
        $qr = mysqli_query($connect,$sql) or die(mysqli_error());

          while($ln = mysqli_fetch_assoc($qr)){
       

      $titulos  = $ln['titulo'];
        $qtd_l  = $ln['qtd'];
                $inicial  = $ln['inicial'];

}
          $qtdd=$qtd+$qtd_l;
          $iniciall=$inicial+$qtd;
$a = mysqli_query($connect,"UPDATE livros SET qtd ='$qtdd'  WHERE titulo='$titulo'") or die("erro");
$re = mysqli_query($connect,"UPDATE livros SET inicial='$iniciall' WHERE titulo='$titulo'") or die("erro");


echo"<script language='javascript' type='text/javascript'>
        alert('Atualizado');window.location
        .href='atualiza.html'</script>";
           


         
?>
