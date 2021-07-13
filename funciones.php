<?php


function operaciones($a,$b,$operacion="S"){
    if($operacion=="S"){

        $salida=$a+$b;
    }
    elseif($operacion=="R"){

        $salida=$a-$b;
    }
    elseif($operacion=="M"){

        $salida=$a*$b;
    }
    elseif($operacion=="D"){

        $salida=$a/$b;
    }

   return $salida;
}

$resultado=operaciones(2,6,"S");

echo("El resultado es :".$resultado);





?>