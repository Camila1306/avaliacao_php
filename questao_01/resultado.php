<?php
    if($_GET['enviar']) {
        $erro = false;
        (isset($_GET['valI']) && empty($_GET['valI']))?$erro=true:'';
        (isset($_GET['valII']) && empty($_GET['valII']))?$erro=true:'';
        (isset($_GET['valIII']) && empty($_GET['valIII']))?$erro=true:'';
    
        if(!$erro) {
            $valI = $_GET['valI'];
            $valII = $_GET['valII'];
            $valIII = $_GET['valIII'];
            $soma = $valI+$valII+$valIII;

            if ($valI>10){
                echo '<h2> <font color="blue">'.$soma.'</h2>';
            } elseif ($valII<$valIII) {
                echo '<h2> <font color="green">'.$soma.'</h2>';
            } elseif (($valIII<$valI) && ($valIII<$valII)){
                echo '<h2> <font color="red">'.$soma.'</h2>';

            }

        }
    
    }

?>