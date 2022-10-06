<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ex2.php" mothod= "get">
        digite o 1º numero:
        <input type="number" name = "numero1" ><br>
        digite o 2º numero:
        <input type="number" name = "numero2"><br>
        <input type="submit" value= "calcular">
    </form>
 <?php   
  
    $numero1=$_GET ["numero1"];
    $numero2=$_GET ["numero2"];
    $somar=$numero1*$numero2;
    
    echo"A soma de ".$numero1."com".$numero2. "é" .$somar;
  
 ?>
    
</body>
</html>