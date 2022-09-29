<?php 
    if ($_GET['enviar']) {
        $qnt = $_GET['parcelas'];
        $parcelas = 0;
        switch ('parcelas'){
             case 1:
                $parcelas = ((8654 * 0.015 * 24)+8654)/24;
                break;
            case 2:
                $parcelas = ((8654 * 0.02 * 36)+8654)/36;
                break;
            case 3:
                $parcelas = ((8654 * 0.025 * 48)+8654)/48;
                break;
            case 4:
                $parcelas = ((8654 * 0.030 * 60)+8654)/60;
                break;
        }
        
        return $parcelas;

        echo 'o valor das parcelas será de : '.$parcelas;
        
    }
?>