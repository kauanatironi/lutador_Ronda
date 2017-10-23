
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <pre>
        <?php
        require_once 'Lutador.php';
        require_once 'Luta.php';
        $lutador = array();
        $L1[0] = new Lutador("Ronda Rousey", "EUA", 30, 1.70, 61, 12, 2, 0);
        $L2[1] = new Lutador("Pretty Boy", "França", 31, 1.75, 68.9, 11, 2, 1);
        $L3[2] = new Lutador("Homer Simpsom", "Fox", 45, 1.70, 69, 2, 12, 1);
        
        $UFC = new Luta();
        $UFC->marcarLuta($L1[0], $L3[2]);
        $UFC->lutar();
 
        ?>
    </pre>
    </body>
</html>
