<?php

    if( isset($_POST['edad'])){

        $edad = $_POST['edad'];

    }else{

        $edad = 0;

    }


    function evaluar($edad){

        $resultado = "";

        if($edad >= 18 && $edad <= 60){
            $resultado = "'Es posible que usted sea candidato al cargo'";
        }
        elseif($edad < 18){
            $resultado = "'Eres menor de edad no podemos contratarte'";
        }
        else{
            $resultado = "'Lo sentimos, pero usted no cumple con el perfil del cargo'";
        }

        return $resultado;
    }

?>