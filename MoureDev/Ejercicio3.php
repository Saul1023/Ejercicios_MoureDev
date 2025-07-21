<?php
for($i=2; $i<=100; $i++){
    if($i%2==0){
        echo "$i es par\n";
        $count++;
    } else {
        echo "$i es impar\n";
        $count_impar++;
    }
}
echo "Total de números pares: $count\n";
echo "Total de números impares: $count_impar\n";