<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="<?php getAsset('CSS'); ?>materialize.css" />
       <link type="text/css" rel="stylesheet" href="<?php echo getAsset('CSS'); ?>font-awesome.css"  media="screen,projection"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta charset="UTF-8">
        <title><?php echo $title; ?></title>
    </head>
    <body class="<?php echo $data['bg_color']; ?>">
        
        <?php 
            if($header == true):
                require_once 'header.php';
            endif;
        //echo $data['content'];
        ?>
        <section class="container">
            <?php echo $data['content'] ?>
        </section>
        <script src="<?php echo getAsset('JS'); ?>jquery.min.js"></script>
        <script src="<?php echo getAsset('JS'); ?>materialize.js"></script>
        <script src="<?php echo getAsset('JS'); ?>script.js"></script>
    </body>
</html>
