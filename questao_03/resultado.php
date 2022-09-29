<?php
    if ($_GET['enviar']) {
        $erro=false;

        (isset($_GET['valormaca'])&& empty($_GET['valormaca']))?$erro=true:'';
        (isset($_GET['kgmaca'])&& empty($_GET['kgmaca']))?$erro=true:'';
        (isset($_GET['valormelancia'])&& empty($_GET['valormelancia']))?$erro=true:'';
        (isset($_GET['kgmelancia'])&& empty($_GET['kgmelancia']))?$erro=true:'';
        (isset($_GET['valorlaranja'])&& empty($_GET['valorlaranja']))?$erro=true:'';
        (isset($_GET['kglaranja'])&& empty($_GET['kglaranja']))?$erro=true:'';
        (isset($_GET['valorrepolho'])&& empty($_GET['valorrepolho']))?$erro=true:'';
        (isset($_GET['kgrepolho'])&& empty($_GET['kgrepolho']))?$erro=true:'';
        (isset($_GET['valorcenoura'])&& empty($_GET['valorcenoura']))?$erro=true:'';
        (isset($_GET['kgcenoura'])&& empty($_GET['kgcenoura']))?$erro=true:'';
        (isset($_GET['valorbatata'])&& empty($_GET['valorbatata']))?$erro=true:'';
        (isset($_GET['kgbatata'])&& empty($_GET['kgbatata']))?$erro=true:'';

        if(!$erro){
            $valormaca = $_GET['valormaca'];
            $kgmaca = $_GET['kgmaca'];
            $precomaca = $valormaca * $kgmaca;
            
            $valormelancia = $_GET['valormelancia'];
            $kgmelancia = $_GET['kgmelancia'];
            $precomelancia = $valormelancia * $kgmelancia;

            $valorlaranja = $_GET['valorlaranja'];
            $kglaranja = $_GET['kglaranja'];
            $precolaranja = $valorlaranja * $kglaranja;

            $valorrepolho = $_GET['valorrepolho'];
            $kgrepolho = $_GET['kgrepolho'];
            $precorepolho = $valorrepolho * $kgrepolho;

            $valorcenoura = $_GET['valorcenoura'];
            $kgcenoura = $_GET['kgcenoura'];
            $precocenoura = $valorcenoura * $kgcenoura;

            $valorbatata = $_GET['valorbatata'];
            $kgbatata = $_GET['kgbatata'];
            $precobatata = $valorbatata * $kgbatata;

            $total = $precomaca + $precomelancia + $precolaranja + $precorepolho + $precocenoura + $precobatata;

            if ($total<50) {
                echo '<h3><font color="blue">Você ainda tem R$ '. 50-$total .' para gastar.</h3>';
            } elseif ($total == 50) {
                echo '<h3><font color="green">Saldo esgotado.</h3>';
            } else {
                echo '<h3><font color="red">Faltam R$ '. $total-50 .' para completar a compra.</h3>';    
            }
        }
    }

?>

