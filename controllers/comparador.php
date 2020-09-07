<?php

    $A = 4;
    $B = 5;
    $C = 10;
    $D = 3;
    $E = 7;
    $F = 9;

    function valorX($A,$B,$C,$D,$E,$F) {
        $result = ($A < $B) OR (!($A<>$B) AND ($A+$B<$D OR $A<$F));
        
        if($result == 1){
            echo "Felicitaciones la expresión es verdadera";
        }
        else{
            echo "La expresión es falsa";
        }
    }

    function valorY($A,$B,$D,$F){
        $Y = $D* $B+$F-$A/$B*$F;

        return $Y;
    }

?>