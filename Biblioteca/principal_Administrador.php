
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
                          <li><a href="atualiza.html">Atualizar a unidade</a></li>  
                      <li><a href="upload.php">Atualizar imagens</a></li>
          
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
      padding:0px;
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
      padding: 4px 12vh;
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
      
      <li><a href="#1">Livros emprestados</a></li>
      <li><a href="#2">Historico de frequencia por periodo</a></li>
      <li><a href="#3">Usuarios</a></li>
      <li><a href="#4">Livros armazenados</a></li>
      <li><a href="#5">Vencimentos</a></li>
</center>
    </ul>
  </div>

    <!-- Main -->
        <div class="inner">
          <div class="content">
            <header><center>
        	<form method="POST" action="pesquisar_adm.php">
<br><br><br><br>
    <input type="text" name="pesquisar" placeholder="PESQUISAR" width="10%"><br>
  <input type="submit" value="ENVIAR">
</form><br></div></div>
   <style type="text/css">
              #minhaTabela tr td{
  padding:5px 10px;
  text-align: center;
  
  cursor: pointer; /**importante para não mostrar cursor de texto**/
}

#minhaTabela tr td:last-child{
  text-align: right;
}

/**Cores**/
#minhaTabela tr:nth-child(odd){
  background-color: #eee;
}

/**Cor quando passar por cima**/
#minhaTabela tr:hover td{
  background-color: #feffb7;
}

/**Cor quando selecionado**/
#minhaTabela tr.selecionado td{
  background-color: #aff7ff;
}

button#visualizarDados{
  background-color: white;
  border: 1px solid black;
  width:50%;
  margin: 10px auto;
  padding:10px 0;
  display: block;
  color: black;
}</style>
    <div id="all">

      <div id="heading-breadcrumbs">
  <section id="cart_items">
    <div class="container">
    
      <div class="table-responsive cart_info">
        <table class="table table-condensed">
       <table id='minhaTabela'>
          <thead>
<center><a name="topo">
</a>  <h3>    Livros emprestados</center>
                  <tr class="cart_menu">

                        <th width="350">ID</th>
          <th width="350">Nome</th>
        <th width="350">Quantidade</th>
          <th width="350">Usuario</th>
  
           <th width="350">Login</th> <th width="350">Vencimento</th>
    
        
            </tr>
          </thead>
         
          <tbody bgcolor="white">
            <tr>

     <?php


            
                require("conexao.php");
      
                     $login=$_SESSION['login'];
                                
                                  $sql = "SELECT a.nome_usuario, b.nome, b.qtd,b.data,b.login,b.id
FROM usuarios as A
INNER JOIN carrinho as B
                on a.login = b.login
                ;";
          $qr = mysqli_query($connect,$sql) or die(mysqli_error());

          while($ln = mysqli_fetch_assoc($qr)){
       


                        $titulo  = $ln['nome'];
                $nome_usuario  = $ln['nome_usuario'];
           
                      $login  = $ln['login'];
                          $qtd  = $ln['qtd'];
                       $venci  = $ln['data'];
                          $id  = $ln['id'];
          echo  '     
                      <div class="col-lg-3 col-md-4">
                    <div class="product">
                          <font size="2"><tr>
                         <td>'.$id.'</td>
                          <td>'.$titulo.'</td>
                        <td>'.$qtd.'</td>
                            <td>'.$nome_usuario.'</td>                     
                          <td>'.$login.'</td>
                          <td>'.$venci.'</td>
                        
 </td>
  ';
             echo '
                      </div>
                    </div>
                  </div>

      
';
$_SESSION['titulo']=$titulo;
            }
          
    ?>		 </tr></tbody></table></table>  <tfoot>

     <button id="visualizarDados" value="Refresh Nutton" onclick="window.location.
                  href='principal_Administrador.php'">Devolver</button>

   </a></h3>
     

    <script>
var tabela = document.getElementById("minhaTabela");
var linhas = tabela.getElementsByTagName("tr");

for(var i = 0; i < linhas.length; i++){
  var linha = linhas[i];
  linha.addEventListener("click", function(){
    //Adicionar ao atual
    selLinha(this, false); //Selecione apenas um
    //selLinha(this, true); //Selecione quantos quiser
  });
}

/**
Caso passe true, você pode selecionar multiplas linhas.
Caso passe false, você só pode selecionar uma linha por vez.
**/
function selLinha(linha, multiplos){
  if(!multiplos){
    var linhas = linha.parentElement.getElementsByTagName("tr");
    for(var i = 0; i < linhas.length; i++){
      var linha_ = linhas[i];
      linha_.classList.remove("selecionado");    
    }
  }
  linha.classList.toggle("selecionado");
}










/**
Exemplo de como capturar os dados
**/
var btnVisualizar = document.getElementById("visualizarDados");

btnVisualizar.addEventListener("click", function(){
  var selecionados = tabela.getElementsByClassName("selecionado");
  //Verificar se eestá selecionado
  if(selecionados.length < 1){
    alert("Selecione pelo menos uma linha");
    return false;
  }
  
var ok="";

  var titulo ="";
 
  for(var i = 0; i < selecionados.length; i++){
    var selecionado = selecionados[i];
    selecionado = selecionado.getElementsByTagName("td");
    titulo +=""+selecionado[1].innerHTML+"";
   var id_ca = "";
   id_ca += ""+ selecionado[0].innerHTML +"" ;
  ok+="Devolvido"


  }

 alert(ok);    

  var dados=JSON.stringify(titulo);

  var id=JSON.stringify(id_ca);

  $.ajax({
    url: 'devolvido.php',
    type: 'POST',
     data: {data:dados},  
    success: function(result){
      // Retorno se tudo ocorreu normalmente
    },
    error: function(jqXHR, textStatus, errorThrown) {
      // Retorno caso algum erro ocorra
    }
  });
});

    
</script>		</div>
				</div>
			</section>
</td> 

<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #ff0000;
  color: white;
}
</style>
</head>
<body>

          

<table id="customers"><br><br>
                   <a name="2">           
            <tr class="cart_menu"><br><br>
                  
    

    
        
            </tr>
          </thead>

          <tbody bgcolor="white"> </a>  <h3>
         <center>Historico</center>
         <tr>
   <th width="350">Periodo</th>

      <th width="350">Retiradas</th>
      <th width="350">Renovações</th>
      <th width="350">Devoluções</th>
  
       <?php
 
   
  
                require("conexao.php");
          
      
                 
                   
                                  $sql ="SELECT a.nome, SUM(a.qtd), SUM(a.renovacoes),
                                  SUM(b.devolucoes), c.periodo FROM historico as A
                                   inner join livros as B on a.nome=b.titulo 
                                   inner join usuarios as C on a.login=c.login GROUP BY periodo"
;
          $qr = mysqli_query($connect,$sql) or die(mysqli_error());

          while($ln = mysqli_fetch_assoc($qr)){
       

  $periodo  = $ln['periodo'];
                   
                        $qtd  = $ln['SUM(a.qtd)'];
                       
                      

                          $renovacoes=$ln['SUM(a.renovacoes)'];
                           
                          $devolucoes=$ln['SUM(b.devolucoes)'];
echo  

'

                  <div class="col-lg-3 col-md-4">
                    <div class="product">
    

                          <font size="2"><tr>
                          <td>'.$periodo.'</td>
                   

                          <td>'.$qtd.'</td>
                       

                      <td>'.$renovacoes.'</td>
                        <td>'.$devolucoes.'</td>
                        
  ';
             echo '
                      </div>
                    </div>
                  </div>

      
';


            }

          
    ?>         </tr></tbody></Table></tfoot>
      
 
<table id="customers">      <a name="3">  <br><br>    </a>  <h3>
                         <center>Usuários</center>
          <th width="350">Nome</th>
        <th width="350">Usuario</th>
            <th width="350">Curso</th>
    
    </a>
        
            </tr>
          </thead>
         
          <tbody bgcolor="white">
            <tr>

       <?php
 
   
  
                require("conexao.php");
          
      
                   
                                  $sql ="SELECT * from usuarios";
          $qr = mysqli_query($connect,$sql) or die(mysqli_error());

          while($ln = mysqli_fetch_assoc($qr)){
       


                        $nome  = $ln['nome_usuario'];
           
              
                        $login  = $ln['login'];

                        $Curso  = $ln['curso'];
                     $periodo  = $ln['periodo'];
                     
echo  

'
 <div class="col-lg-3 col-md-4">
 <div class="product">    
 <font size="2"><tr>
 <td>'.$nome.'</td>
 <td>'.$login.'</td>
 <td>'.$periodo.'</td>                   
 </td>
  ';
echo '</div></div></div>';


            }

          
    ?>              

<table id="customers"><br><br>          <a name="5">   </a>  <h3>
                         <center>Vencimentos</center>
          <th width="350">Titulo</th>
        <th width="350">qtd</th>
      <th width="350">Validade</th>
    
        
            </tr>
          </thead>
         
          <tbody bgcolor="white">
            <tr>     <?php
 
   
  
                require("conexao.php");
          $hoje = date('y/m/d'); 
                   
                                  $sql ="SELECT * from carrinho WHERE data<'$hoje'";
          $qr = mysqli_query($connect,$sql) or die(mysqli_error());

          while($ln = mysqli_fetch_assoc($qr)){
       


                        $titulo  = $ln['nome'];
               $qtd  = $ln['qtd'];
                  $data  = $ln['data'];
                      
              
                     
              
                    
echo  

'

                  <div class="col-lg-3 col-md-4">
                    <div class="product">
    

                          <font size="2"><tr>
                          <td>'.$titulo.'</td>
                          <td>'.$qtd.'</td>
                       <td>'.$data.'</td>
                     
                       
                     
                        
 </td>
  ';
             echo '
                      </div>
                    </div>
                  </div>

      
';
$_SESSION['titulo']=$titulo;

            }

          
    ?>       

<table id="customers"><br><br>          <a name="4">   </a>  <h3>
                <center>Livros cadastrados</center>         
          <th width="350">Titulo</th>
        <th width="350">Autor</th>
    
        <th width="350">Endereçamento</th>
        <th width="350">Edição</th>
        <th width="350">Editora</th>
        <th width="350">Ano</th>
        <th width="350">EAN</th>
        <th width="350">ISBN</th>
     <th width="350">Quantidade de livros</th>
        
            </tr>
          </thead>
         
          <tbody bgcolor="white">
            <tr>     <?php
 
   
  
                require("conexao.php");
          
      
                   
                                  $sql ="SELECT * from livros";
          $qr = mysqli_query($connect,$sql) or die(mysqli_error());

          while($ln = mysqli_fetch_assoc($qr)){
       


                        $titulo  = $ln['titulo'];
               $autor  = $ln['autor'];
                       $enderecamento  = $ln['enderecamento'];
               $edicao  = $ln['edição'];
                       $editora  = $ln['editora'];
               $ano  = $ln['ano'];
                       $EAN  = $ln['EAN'];
               $ISBN  = $ln['ISBN'];
                            $inicial  = $ln['inicial'];
                     
              
                    
echo  

'

                  <div class="col-lg-3 col-md-4">
                    <div class="product">
    

                          <font size="2"><tr>
                          <td>'.$titulo.'</td>
                          <td>'.$autor.'</td>
                     
                            <td>'.$enderecamento.'</td>
                          <td>'.$edicao.'</td>
                     
                            <td>'.$editora.'</td>
                          <td>'.$ano.'</td>
                     
                            <td>'.$EAN.'</td>
                          <td>'.$ISBN.'</td>
                        <td>'.$inicial.'</td>
                     
                            
                     
                        
 </td>
  ';
             echo '
                      </div>
                    </div>
                  </div>

      
';
$_SESSION['titulo']=$titulo;

            }

          
    ?>       </tr></tbody></a>    </tr></tbody></Table></tfoot>

    </tr>
	<!-- Footer --></tfoot></div></div></section></div></div></center></header></div>
   <BR><BR>
		<br><BR>		</BR></tr></tbody>
</tfoot></form></table>
					<center>
<hr>
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