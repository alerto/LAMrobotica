<!doctype html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>LAM robotica</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--Modernize & JQmobile styles-->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="js/vendor/jquery.mobile-1.4.2/jquery.mobile-1.4.2.css" />
        <link rel="stylesheet" href="css/themes/jquery.mobile.icons.min.css" />
        <link rel="stylesheet" href="js/vendor/jquery.mobile-1.4.2/jquery.mobile.structure-1.4.2.css" />
        <!--/Modernize & JQmobile styles-->

        <!--JS plugins-->
        <script type = "text/javascript" src = "js/vendor/jquery-1.11.1.js"></script>
        <script src="js/vendor/modernizr-2.8.0.min.js"></script>
        <script type="text/javascript" src="js/vendor/jquery.localize.js"></script>
        <script src="js/main.js"></script>
        <script type="text/javascript" src="js/vendor/jquery.mobile-1.4.2/jquery.mobile-1.4.2.js"></script>
        <!--/JS plugins-->

        <!--Personalized styles & scripts-->
        <link rel="stylesheet" href="css/themes/themes.css" />
        <link rel="stylesheet" href="css/main.css">
        <!--<link rel="stylesheet" href="css/home.css">-->
        <script src="js/plugins.js"></script>

        <!--Latest compiled and minified CSS--> 
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
        <!--Optional theme--> 
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
        <!--Latest compiled and minified JavaScript--> 
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
        <style>
            *{
                color: olive !important;
            }
        </style> 
    </head>    
    <body>
        <div data-role="page" data-theme = "a">
            <div data-role="header" class="ui-content" data-theme="a">
                <?php include './resources/header.html'; ?>
            </div>
            <div role="main" class="ui-content" data-theme="a">                
                <?php include './resources/serivces.html'; ?>
            </div>
            <div data-role="footer" class="ui-content" data-theme="a">
                <?php include './resources/footer.html'; ?>                
            </div>
        </div>    
    </body>
</html>