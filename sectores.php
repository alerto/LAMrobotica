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
        <link rel="stylesheet" href="js/vendor/jquery.mobile-1.4.5/jquery.mobile-1.4.5.min.css" />
        <link rel="stylesheet" href="css/themes/jquery.mobile.icons.min.css" />
        <link rel="stylesheet" href="js/vendor/jquery.mobile-1.4.2/jquery.mobile.structure-1.4.2.css" />
        <!--/Modernize & JQmobile styles-->
        
        <!--JS plugins-->        
        <script type = "text/javascript" src = "js/vendor/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="js/vendor/jquery.mobile-1.4.5/jquery.mobile-1.4.5.min.js"></script>
        <script src="js/vendor/modernizr-2.8.0.min.js"></script>
        <script type="text/javascript" src="js/vendor/jquery.localize.js"></script>        
        <!--/JS plugins-->
        
        <!--Personalized styles & scripts-->
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <link rel="stylesheet" href="css/themes/themes.css" />
        <link rel="stylesheet" href="css/main.css">
        <!--<link rel="stylesheet" href="css/home.css">-->


        <!--Latest compiled and minified CSS--> 
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
        <!--Optional theme--> 
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
        <!--Latest compiled and minified JavaScript--> 
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    </head>    
    <body>
        <div data-role="page" data-theme = "a">

            <header data-role="header" class="ui-content" data-theme="a">
                <?php include ('./html/header.html'); ?>
            </header>
            <div role="main" class="ui-content" data-theme="a">                
                <?php include('./html/areas.html'); ?>
            </div>
            <footer data-role="footer" class="ui-content" data-theme="a">
                <?php include('./html/footer.html'); ?>                
            </footer>
        </div>    
    </body>

</html>