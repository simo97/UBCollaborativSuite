<!DOCTYPE html>

<html>
    <head>
        <link type="text/css" rel="stylesheet" href="<?php echo getAsset('css'); ?>font-awesome.css"  media="screen,projection"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta charset="UTF-8">
        <title><?php echo $title; ?></title>
        <link href="<?php echo getAsset('css'); ?>materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
        <link href="<?php echo getAsset('css'); ?>style.min.css" type="text/css" rel="stylesheet" media="screen,projection">
        <!-- Custome CSS-->    

    </head>
    <body>
        <header class="row">
            <?php 
            if($header == true):
                require_once 'header.php';
            endif;
            ?>
        </header>
          <!-- Modal Structure -->
  <div id="modal1" class="modal">
    
  </div>
        
        <div id="main">
            <div class="wrapper">
                <aside id="left-sidebar-nav">
                    <?php echo $data['side_bar']; ?>
                </aside>
                <section id="content">
                    <div class="container" id="contenu">
                        <?php echo $data['content'];?>
                    </div>
                </section>
            </div>
        </div>

        <script src="<?php echo getAsset('js'); ?>jquery.min.js"></script>
        <script src="<?php echo getAsset('js'); ?>materialize.js"></script>
        <script src="<?php echo getAsset('js'); ?>script.js"></script>
        <script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
          

    
        <!--plugins.js - Some Specific JS codes for Plugin Settings-->
        <script type="text/javascript" src="js/plugins.min.js"></script>
        <!--custom-script.js - Add your own theme custom JS-->
        <script type="text/javascript" src="js/custom-script.js"></script>
    </body>
</html>
