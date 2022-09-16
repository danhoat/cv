<!DOCTYPE html>
<html lang="en">
    <head>
        <?php global $is_index;?>
        <script type="text/javascript">

            var cv  = { ajaxURL: '<?php echo SITE_URL;?>/ajax.php'};
        </script>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Danng-Senior-PHP-Developer</title>
        <link href="bootstrap.min.css"  rel="stylesheet" >
        <link href="style.css?ver=<?php echo rand();?>" rel="stylesheet" >
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&family=Montserrat:wght@200;300;400;500&family=Open+Sans:wght@400;500&family=Oswald:wght@200;300;400;500&family=Poppins:wght@200;300;400;500&family=Raleway:wght@200;300;400;500&family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300&family=Roboto:wght@300;400&family=Rubik:wght@300;400;500&display=swap" rel="stylesheet">
        <link href="fonts.css" rel="stylesheet" >
        <link href="tool.css?ver=<?php echo rand();?>" rel="stylesheet" >
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="<?php echo SITE_URL;?>/tool.js?ver=<?php echo rand();?>"></script>
        <?php
        $layout = isset($_COOKIE['layout']) ? (int) $_COOKIE['layout']: 1;
        if(!$is_index){
            if($layout == 2){
                echo '<link href="assets/2-columns.css?ver='.rand().'" rel="stylesheet" >';
            }
        }
        ?>
    </head>
    <body>