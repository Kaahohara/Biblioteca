<html>
<head>
 <title>Passar Variável Javascript para PHP</title>
 <script>
  var variaveljs = 'Eu sou uma variável JavaScript.';
 </script>
</head>

<body>

<?php
   $variavelphp = "<script>document.write(variaveljs)</script>";
   echo $variavelphp;
?>

</body>
</html>