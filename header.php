<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> 
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>RJ Commercial Flooring Company</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon: Browser + iPhone Webclip -->
    <link rel="shortcut icon" href="img/favicon.ico" />
    <link rel="apple-touch-icon" href="img/iphone.png" />

    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/foundation.css" />
    
    <!-- javascript -->
    <script src="js/modernizr.js"></script>


</head>

    <body>
        <div id="header" class="row">
                <div class="small-12 medium-2 columns logo">
                    <a href="http://rj-inc.com"><img src="img/logo.png" alt="RJ Commercial Flooring Company"></a>
                </div>
                <div class="small-12 medium-10 columns" style="margin-top:40px;">
                    <dl class="sub-nav right">
                        <dd <?=echoClass("home")?>><a href="/">Home</a></dd>
                        <dd <?=echoClass("schools")?>><a href="schools.php">Schools</a></dd>
                        <dd <?=echoClass("churches")?>><a href="churches.php">Churches</a></dd>
                        <dd <?=echoClass("healthcare")?>><a href="healthcare.php">Healthcare</a></dd>
                        <dd <?=echoClass("partners")?>><a href="partners.php">Partners</a></dd> 
                        <dd <?=echoClass("team")?>><a href="team.php">The Team</a></dd>
                    </dl>
                </div>
        </div>



		<!-- Lookup active page -->
        <?php
			function echoClass($requestUri)
			{
    			$current_file_name = basename($_SERVER['REQUEST_URI'], ".php");

    			if ($current_file_name == $requestUri)
        		echo 'class="active"';
			}
		?>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        