
<?php 
$titulo =$_POST['titulo'];
include("conexao.php");
  $msg = false;

  if(isset($_FILES['arquivo'])){

    $extensao = strtolower(substr($_FILES['arquivo']['name'], -4)); //pega a extensao do arquivo
    $novo_nome = md5(time()) . $extensao; //define o nome do arquivo
    $diretorio = 'C:\xampp\xamp\htdocs\Biblioteca\images\ '; //define o diretorio para onde enviaremos o arquivo

    move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome); //efetua o upload
    
$sqll=mysqli_query($connect,"UPDATE livros SET img='$novo_nome'WHERE titulo='$titulo'") or die("erro");

echo"<script language='javascript' type='text/javascript'>
        alert('Atualizado');window.location
        .href='upload.php'</script>";

  }

?>