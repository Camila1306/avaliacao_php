<?php
    if ($_GET['enviar']){
        $erro = false;

        (isset($_GET['num'])&& empty($_GET['num']))?$erro=true:'';

        if(!$erro) {
            $num = $_GET['num'];

            if($num %2 == 0) {
                echo "O número ".$num." é divisível por 2";
            } else {
                echo "O número ".$num." não é divisível por 2";  
            }
        }


    }

?>