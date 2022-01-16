<?php 
    session_start();
$titulo = $_POST['titulo'];
$autor =$_POST['Autor'];
$enderecamento =$_POST['enderecamento'];
$editora =$_POST['editora'];
$ano =$_POST['ANO'];
$edição =$_POST['edição'];
$EAN =$_POST['EAN'];
$ISBN =$_POST['ISBN'];
$tipo=$_POST['tipo'];
   
                require("conexao.php");
            $sql = "SELECT * from livros WHERE titulo='$titulo'";
        $qr = mysqli_query($connect,$sql) or die(mysqli_error());

          while($ln = mysqli_fetch_assoc($qr)){
       

      $titulos  = $ln['titulo'];

}
        if($titulos == null){
   


$sqll = mysqli_query($connect,"INSERT INTO livros(titulo,autor,enderecamento,editora,ano,edição,EAN,ISBN,tipo) VALUES('$titulo','$autor','$enderecamento','$editora','$ano','$edição','$EAN','$ISBN','$tipo')");
echo"<script language='javascript' type='text/javascript'>
        alert('Cadastrado');window.location
        .href='livros.html'</script>";
           
}else{
  
       echo"<script language='javascript' type='text/javascript'>
                  alert('Esse livro já foi Cadastrado!');window.location.
                  href='livros.html'</script>";
}
         
?>
