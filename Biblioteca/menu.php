<html>
	 <link rel="stylesheet" type="text/css" href="se.css" />
	 </head>
<body >
<br><br><br><br><br><br><br><br><br><br><br>

<div class="mainDiv" >
    <div class="Rectangle" >
<p>
	<?php

session_start();


if ($_SESSION['login'] == 'adm@adm'){		


			echo "<script>window.open('menu_adm.php', '_self')</script>";		
	
	}


if ($_SESSION['login']!='adm@adm')
{	
	echo"<script language='javascript' type='text/javascript'>
        alert('Logado');window.location
        .
                  href='principal.php'</script>";
}
	


else
{
	echo "<script>window.open('erro_cadastro.html', '_self')</script>";		
	
}
?>

</p>
</div>
</div>
</body>
	
</html>