<!DOCTYPE 
<html>
<head>
   <title>Tablas de multiplicar DADM.</title> 
</head>
<body>
<h1>Tablas de multiplicar</h1>
<h3>Escribe un número del 1 al 10 y yo te diré la tabla de multiplicar.</h3>
<h4>Creado por Denilson Diaz</h4>
<form action="#" method="post">
   <p>Escribe aquí el número: <input type="text" name="num" maxlength="2" size="2" /></p>
   <p><input type="submit" value="Ver tabla de multiplicar." /></p>
</form>
<?php  
$n=$_POST['num'];
if ($n<1 or $n>10) {
    echo "no has escrito un nůmero entre el 1 y el 10.";
    }
else {
     echo "<h4>Tabla del $n:</h4>";
     $i=1;
     while ($i<=10) {
           echo "$n x $i = ".$n*$i."<br/>";
           $i++;
           } 
     }
     
      
?>
</body>
</html>