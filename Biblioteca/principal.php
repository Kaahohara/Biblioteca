
<?xml version="1.0" encoding="iso-8859-1"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 
<html  xml:lang="pt" lang="pt">
 
        
<html>
  <head>
    <title>Biblioteca Online</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="stylesheet" href="assets/css/main.css" />

    <link rel="stylesheet" href="assets/css/formatação do livro.css" id="theme-stylesheet">
   <link rel="stylesheet" href="assets/css/principal.css"/>

     <?php
   session_start();
?>
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
      <nav id="menu">       <ul class="links">
    
            <li><a href="principal_Administrador.php">Relatórios</a></li>

                    <li><a href="livros.html">Cadastrar</a></li>      
                    
        <li>
   
<a href="sair.php">Sair</a> </li> </ul>
     

   </nav>
          <!-- Heading -->
      <div id="heading" >
        <h2>Home</h2>
      </div>

<head>
  <title>Menu Horizontal</title>
  <style type="text/css">
  <!--
    body {
      padding:0px;
      margin:0px;
    }
 
    #menu1 ul {
      padding:05px;
      margin:0px;
      float: left;
      width: 100%;
      background-color:#000;
      list-style:none;
      font:80% Tahoma;
    }
 
    #menu1 ul li { display: inline; }
 
    #menu1 ul li a {
      background-color:#000;
      color: #fff;
      text-decoration: none;
      border-bottom:3px solid #EDEDED;
      padding: 4px 18vh;
      float:left;
    }
 
    #menu1 ul li a:hover {
      background-color:#D6D6D6;
      color: #6D6D6D;
      border-bottom:3px solid #EA0000;
    }
  -->
  </style>
</head>
 
<body>
  <div id="menu1">
    <ul><center>
       <li><a href="#1">Livros</a></li>
      <li><a href="#2">Revistas</a></li>
      <li><a href="#3">TCC</a></li>
      <li><a href="#4">Manual</a></li>
      <li><a href="#5">Outros</a></li>
</center>
    </ul>
  </div>
				<div class="inner">
					<div class="content">
						<header><center>			
		<!-- Highlights -->
		<br><br>
				<div class="inner">
					<header class="special"><br>	
						   <div id="content"></div>
						   	<center><form method="POST" action="pesquisar.php">
    <input type="text" name="pesquisar" placeholder="PESQUISAR" width="10%">
  <input type="submit" value="ENVIAR">
</form><br></center>
      
                	<center><h3>Livros<hr></h3></center><br> </h3>
<a name="1">    </a>
       <div class="container">
          <div class="row bar">
              <div class="products-big">
                <div class="row products">
 <?php      
    require("conexao.php");
             $sql = "SELECT * FROM livros where tipo='livros'";
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

';$_SESSION['titulo']=$titulo;
            
          }
    ?>        </div>  </div></div>
        </div><br><center>
   <h3>Revistas<hr></center><br></h3>
<a name="2">
        </a>
                      <div class="container">
          <div class="row bar">
              <div class="products-big">
                <div class="row products">
 <?php      
    require("conexao.php");
                   $sql = "SELECT * FROM livros where tipo='revista'";
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

';$_SESSION['titulo']=$titulo;
            
          }
    ?>  
  </div></div></div></div></a>
   <center><Br><h3>TCC<hr></center><br></h3>
                <a name="3"></a>
   <div class="container">
          <div class="row bar">
              <div class="products-big">
                <div class="row products">
 <?php      
    require("conexao.php");
            $sql = "SELECT * FROM livros where tipo='TCC'";
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

';$_SESSION['titulo']=$titulo;
            
          }
    ?> </div>  </div></div>
        </div><br><center>
				<h3>Manual<hr></center><br></h3>
                <a name="4">
           </a>
                  <div class="container">
          <div class="row bar">
              <div class="products-big">
                <div class="row products">
 <?php      
    require("conexao.php");
         $sql = "SELECT * FROM livros where tipo='manual'";
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

';$_SESSION['titulo']=$titulo;
            
          }
    ?>  
    </div></div></div></div>
        <Br><center>
                      <h3>Outros<hr></center><br></h3><BR>
                      <a name="5">
        </a>
              <div class="container">
          <div class="row bar">
              <div class="products-big">
                <div class="row products">
 <?php      
    require("conexao.php");
             $sql = "SELECT * FROM livros where tipo='outros'";
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

';$_SESSION['titulo']=$titulo;
            
          }
    ?>   

            
       		</div></div></div>
        </header></div></section></center>
	
	<!-- Footer -->
		<br><BR>	<hr>	
</a></a>
					<center>

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