<?php
    //compilador online https://www.programiz.com/php/online-compiler/
    $n = readline("Cuantos numeros va a ingresar: ");

    $array = [];

    for($i = 0; $i < $n; $i++) {
        $array[$i] = readline("Ingrese numero " . ($i + 1) . ": ");
    }

    print_r($array);

    
    $sumar = function(...$parametres){
        $suma = 0;
        foreach($parametres as $value){
           $suma += $value;
        }

        return $suma;
    };
    
    $resta = function(...$parametres){
        $resta = 0;
        foreach($parametres as $value){
           $resta -= $value;
        }

        return $resta;
    };

    $multiplicacion = function(...$parametres){
        $mul = 1;
        foreach($parametres as $value){
           $mul *= $value;
        }

        return $mul;
    };

    $division = function(...$parametres){
        $div = 1;
        foreach($parametres as $value){
           $div += $value;
        }

        $div = $div / count($parametres);

        return $div;
    };
    
   

    echo "La suma es: ".$sumar(...$array)."\n";
    echo "La resta es: ".$resta(...$array)."\n";
    echo "La division es: ".$division(...$array)."\n";
    echo "La multiplicacion es: ".$multiplicacion(...$array)."\n";
?>