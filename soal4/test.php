<?php
$angka = 5;
$median = floor($angka/2) ;
for ($x=0; $x < $angka; $x++) {
        for ($y=0; $y < $angka; $y++) {
            if ($x == $median) {
                echo "*";
            } else {
                if ($y==0 || $y == $angka-1 ) {
                    echo "*";
                } else {
                    echo "=";
                }
                
            }
            
        }
        echo "<br/>"; 
    }


?>