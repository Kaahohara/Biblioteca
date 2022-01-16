<html><head>
	 <link rel="stylesheet" type="text/css" href="se.css" />
	 </head>
<body>
	<?php

session_start();

if (isset($_SESSION['login']) && isset($_SESSION['senha']))
{
	
	if ($_SESSION['login'] == 'adm@adm')
	{		
	   echo"<script language='javascript' type='text/javascript'>
                  alert('Bem vindo Administrador');window.location
                  .href='principal_Administrador.php'</script>";		
	}
	
else
{
	echo "USUARIO NÃO AUTENTICADO";
}}
?>

</p>
</div>
</div>
</body>
	
</html>