<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
    <?php
        require_once 'ContaBanco.php';
        $p1 = new contaBanco();
        $p2 = new contaBanco();
        
        $p1->abrirConta("CC");
        $p1->setDono("Jubileu");
        $p1->setNumConta(11111);

        $p2->abrirConta("CP");
        $p2->setDono("Creuza");
        $p2->setNumConta(22222);

        print_r($p1);
        print_r($p2);
    ?>
    </pre>
</body>
</html>