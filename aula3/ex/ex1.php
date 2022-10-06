<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ex1.php" method = "get" >
     
        Digite o Valor do Raio:

    <input type="number"  name="raio"> <br>
    <input type="submit" value= "calcular Raio"> <br>

    </form>
    
    <?php 
       
       $raio = $_GET ["raio"];
        $m_pi = 3.1415;
        $area = $m_pi * $raio ** 2
        $perimetro = 2 $m_pi*$raio;

        echo "<br/> o valor da area " $area "do raio informado" $raio;
        echo "<br/> o valor do do perimetrodo raio"$raio "é" $perimetro;

    ?>
   
</body>
</html>