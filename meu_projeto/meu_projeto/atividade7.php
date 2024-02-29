<?php
    $matriz = array(
        array(1, 2, 3),
        array(4, 5, 6),
        array(7, 8, 9)
    );

    $transposta = array();

    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
            $transposta[$i][$j] = $matriz[$i][$j];
                        
        }
    } 
    
    foreach ($transposta as $linhas) {
        echo implode(" ", $linhas) . "<br>";
    }
?>        




