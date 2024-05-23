<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercico 12</title>
</head>
<body>
 <!--Escreva um algoritmo que receba um valor, 
 calcule e mostre um desconto de 27%.    -->   
 <label >
    <h1>Desconto de 27% </h1>
    <form  method="post">
        Valor: <input type="text" name="valor" ><br><br>
        <input type="submit" value="Calcular"><br><br>
    </form>
 </label>
</body>
<?php 
$Valor =$_POST['valor'];
$desconto = ($Valor* 27) /100;
echo"O desconto de 27%  de R$ " .$Valor. ". <br>São R$ " .$desconto;
?>
</html>
