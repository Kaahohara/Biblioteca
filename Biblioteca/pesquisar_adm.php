
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
             
            <li><a href="principal_Administrador.php">Relatórios</a></li>

                    <li><a href="livros.html">Cadastrar</a></li>      
                         <li><a href="atualiza.html">Atualizar a unidade</a></li>  
                      <li><a href="upload.php">Atualizar imagens</a></li>
          
        <li>
   
<a href="sair.php">Sair</a> </li> </ul>
        </nav>

                </ul>
            </nav>


                    <!-- Heading -->
            <div id="heading" >
                <h2>Home</h2>
            </div>
      <div class="table-responsive cart_info">
        <table class="table table-condensed">
          <thead>
            <tr class="cart_menu">
          <th width="350">Nome</th>
        <th width="350">Quantidade</th>
        <th width="350">Usuario</th>
           <th width="350">Login</th> <th width="350">Vencimento</th>
     
             <td></td>
            </tr>
          </thead>
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
  


           require("conexao.php");
          
                     $sql = "SELECT a.nome_usuario, b.nome, b.qtd,b.data,b.login
FROM usuarios as A
INNER JOIN carrinho as B
                on a.login = b.login
                ;";
          $qr = mysqli_query($connect,$sql) or die(mysqli_error());

          while($ln = mysqli_fetch_assoc($qr)){
         
                        $titulo  = $ln['nome'];
           
                      $nome  = $ln['nome_usuario'];
                      $login  = $ln['login'];
                        $qtd  = $ln['qtd'];
                       
                       $venci  = $ln['data'];
                       
      
             echo '
<tr><td>
                  <div class="col-lg-3 col-md-4">
                    <div class="product">

                   
                          <font size="2">'.$titulo.'</td><td></font>
                          '.$qtd.'</td>
                          <td>'.$nome.'</td>
                     
                          <td>'.$login.'</td><td>'.$venci.'</td><br>
 </td>   </tr>          </a></h3>';
            
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
</BR></div></div></div></header></div></section></center></header></div></div></section></table></div>
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