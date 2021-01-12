<?php
    //la funcion puede ser capaz de calcular la distancia entre dos puntos
    function distancia ($x1, $y1, $x2, $y2) {
        // se calcula la distancia
        $dis=sqrt(pow($x2-$x1, 2)+pow($y2-$y1, 2));
        //sqrt= raiz cuadrado y pow calcula (base & potencia)
        return $dis;
    }
    //Punto 1
    $x1=1;
    $y1=1;
    //Punto 2
    $x2=2;
    $y2=4;
    //Punto 3
    $x3=3;
    $y3=2;

    //Calculo de distancia para cada segmento

    //Calculo de Distancia P1P2*
    $dp1p2=distancia($x1,$y1,$x2,$y2);

    //Calculo de distancia P1P3*
    $dp1p3=distancia($x1,$y1,$x3,$y3);

    //Calculo de distancia P2P3
    $dp2p3=distancia($x2,$y2,$x3,$y3);

    //Calculamos el promedio de la distancia como tal
    $pDistancia = ($dp1p2+$dp1p3+$dp2p3)/3;

    echo "La distancia promedio entre los tres (03) Punto es.: $pDistancia";

?>
