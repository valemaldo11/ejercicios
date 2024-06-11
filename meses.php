<?php
function obtenernombremes($numeromes){
    switch ($numeromes) {
        case 1:
            return "enero";
         case 2:
                return "febrero";
         case 3:
                    return "marzo";
      case 4:
                        return "abril";
     case 5:
                    return "mayo";
      case 6:
                     return "junio";
     case 7:
                  return "julio";
     case 8:
                 return "agosto";
       case 9:
                             return "septiembre";
                         case 10:
                                                return "octubre";
       case 11: 
                return "noviembre";
       case 12: 
                return "diciembre";                  

    }
}

function obtenerestacion(nombremes){
    $estaciones = array (
        "enero" => "verano",
        "febrero" => "verano",
        "marzo" => "otoño",
        "abril" => "otoño",
        "mayo" => "otoño",
        "junio" => "invierno",
        "julio" => "invierno",
        "agosto" => "invierno",
        "septiembre" => "primavera",
        "octubre" => "primavera",
        "noviembre" => "primavera",
        "diciembre" => "verano"

    );

    $numeromes =7;

    $nombremes = obtenernombremes($numeromes);
    echo "el numero $numeromes corresponde al mes de $nombremes.\n";

    $estaciones = obtenerestacion($nombremes);
    echo "este mes pertenece a la estacion de $estacion.\n";

}
?>