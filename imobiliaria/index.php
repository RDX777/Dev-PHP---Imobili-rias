<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Imobiliaria</title>
    </head>
    <body>
        <?php
        require './vendor/autoload.php';
        
        use Core\ConfigController as ControllerHome;
        $Url = new ControllerHome();
        $Url->carregar();
        ?>
    </body>
</html>
