<?php
$angka=$_POST['angka'];
if(preg_match("/[0-9]$/",$angka)){
    $hasil = $angka % 2;
    if ($hasil == 0) {
        echo "Maaf, angka yang anda masukkan ganjil";
    } else {
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
    }
} else {
    echo "Maaf, Mohon masukkan angka";
};


?>