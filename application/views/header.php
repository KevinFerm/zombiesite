<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.4.2/pure-min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">

    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <?php 
    
    if($device == "mobile"){ ?>
    <script src="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script>
    <?php } ?>
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
        <div class="planner l-box-lrg pure-g-r">
            <div class="pure-u-1-5">
                <form method="get" class="pure-form pure-form-stacked">
                    <select name="slide">
                        <option value="1">POST ZOMBIE APOCALYPSE</option>
                        <option value="2">FIRST WEEK</option>
                        <option value="3">FIRST MONTH</option>
                        <option value="4">FIRST YEAR</option>
                    </select>
                    <input type="text" name='title' value='Title'>
                    <textarea rows="10" cols="30" name='text'>Enter your text!</textarea>
                   <input type="submit" class="pure-button pure-button-primary" value="Add">
                </form>
            </div>
        </div>