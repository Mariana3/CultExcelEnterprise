<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html>
    <body>
        <?php
        $config = fopen('../../config/config.php', "w+");
        require '../../config/config.php';
        header('Location: installation.php');
        ?>
    </body>
</html>