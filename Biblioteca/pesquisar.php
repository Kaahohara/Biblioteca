
<html>
    <head>
        <title>Biblioteca Online</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <link rel="stylesheet" href="assets/css/main.css" />

    <link rel="stylesheet" href="assets/css/formatação do livro.css" id="theme-stylesheet">
   


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
                    <li><a href="principal.php">Home</a></li>
                    <li><a href="carrinho.php">Agendar livros</a></li>
                      
<br>
<a href="sair.php">Sair</a>

                </ul>
            </nav>


                    <!-- Heading -->
            <div id="heading" >
                <h2>Home</h2>
            </div>

        <!-- Main -->
            <section id="main" class="wrapper">
                <div class="inner">
                    <div class="content">
                        <header><center>
                
                            
        <!-- Highlights -->
            <section class="wrapper">
                <div class="inner">
                    <header class="special">    <br>    

                           <div id="content">
        <div class="container">
          <div class="row bar">

              <div class="products-big">
                <div class="row products">
                
                <?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $dbname = "biblioteca";
    //Criar a conexao
    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
    
    $pesquisar = $_POST['pesquisar'];
    $result_cursos = "SELECT * FROM livros WHERE titulo LIKE '%$pesquisar%' LIMIT 5";
    $resultado_cursos = mysqli_query($conn, $result_cursos);
    if (!$resultado_cursos) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}
    
    while($rows_cursos = mysqli_fetch_array($resultado_cursos)){
  
session_start();

           require("conexao.php");
          
          $sql = "SELECT * FROM livros WHERE titulo LIKE '%$pesquisar%' LIMIT 5";
          $qr = mysqli_query($connect,$sql) or die(mysqli_error());

          while($ln = mysqli_fetch_assoc($qr)){
                 $titulo  = $ln['titulo'];
                            $autor  = $ln['autor'];
                     $Enderecamento  = $ln['enderecamento'];
             echo '   <div class="item">
                  <div class="row">
                    <div class="col-md-7 text-center"></div>
                    <div class="col-md-5"><br><center>
                  
                          <h3 class="h5"><a href="carrinho.php?acao=add&id='.$ln['id'].''. $_SESSION['login'].'" >
          <img src="images/'.$ln['img'].'" width="200" height="200"/><br>
        <font size="2">'.$titulo.'<br></font>'.$autor.'<br>'.$Enderecamento.'
              </a></h3></center>';
             echo '
                      </div>
                    </div>
                  </div>


';
            
          }
    }
?>

    </div>
                </div>
            </section>

    
    <!-- Footer -->
        <br><BR>    <hr>    

                    <center>

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