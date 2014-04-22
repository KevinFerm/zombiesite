<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.4.2/pure-min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
    <script src="code.jquery.com/jquery-latest.min.js"type="text/javascript"></script>
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/js/site.js" type="text/javascript"></script>
</head>
<body>
   <!-- Here be header NOT DONE YET OBV-->
       <div class="header">
        <div class="home-menu pure-menu pure-menu-open pure-menu-horizontal ">
            <a class="pure-menu-heading" href="">Zombiesite master</a>
            <ul>
                <?php echo Modules::run('facebook_button/facebook_button/index'); ?>
                <li><a href="#plannerlink" class="plannerlink">Zombie Planner</a></li>
            </ul>
        </div>
       </div>
       <div class="content-wrapper">
