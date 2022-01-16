
  <?php
   require("conexao.php");
   ?> 
<html>
  <head>
    <title>Biblioteca Online</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
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
            <li><a href="principal_Administrador.php">Relatórios</a></li>

                    <li><a href="livros.html">Cadastrar</a></li>  
                        <li><a href="atualiza.html">Atualizar a unidade</a></li>  
                      <li><a href="upload.php">Atualizar imagens</a></li>
        <li>
<a href="sair.php">Sair</a> </li> </ul>
        </nav>
</div>

<style type="text/css">
  .login-screeen{
  padding-left:52px;
    padding-right:52px;
}
</style>

    <!-- tela de login -->   <br> 
<title> Inserir Imagens</title>
<form action="imagens.php" method="POST" enctype="multipart/form-data">

     <br><br> 
      <label for="titulo">Titulo:</label>
     <select name="titulo"  >
    <option value=""></option>
    <?php
         $sql = "SELECT * from livros";
        $qr = mysqli_query($connect,$sql) or die(mysqli_error());

          while($ln = mysqli_fetch_assoc($qr)){
  ?>
          <option value="<?php echo $ln["titulo"]; ?>">
          <?php 
          echo $ln["titulo"]; }?></option>

</select> 
<br>
<p>
   <label>Arquivo: </label>
<input type="file" required name="arquivo">
  </p><p><input type="submit" value="Salvar"></p>
</form>
 </div>
 
  <!-- Footer -->
    </BR></tr></tbody></td></tr>
</tfoot></form></table></div></div></section>
          <br><BR>  <hr>  <center>

              <p>Desenvolvido por Karina Lira Ohara, Leonardo Salles e Tallison Saraiva</p>
</center>
        <!-- Scripts -->
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/browser.min.js"></script>
      <script src="assets/js/breakpoints.min.js"></script>
      <script src="assets/js/util.js"></script>
      <script src="assets/js/main.js"></script>

  </body>
</html>
