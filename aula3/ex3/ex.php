<?php 
$idade = $_GET ["idade"];
if (idade< 16){ echo "não pode votar" ;
}else if ($idade <18) { 
    echo "seu voto é facultativo ";
}else if ( $idade <= 70) { 
    echo "voto obrigatorio";
} else { echo "voto facultatito";}




?>