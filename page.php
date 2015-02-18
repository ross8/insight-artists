<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        require ( 'head.php' ); 
    ?>
</head>
<body>
    <!--[if lte IE8]>
	<p>You are using a <em>very old</em> version of Internet Explorer which is not compatible with this site. To view this site, <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a></p>
    <![endif]-->
    <div class="ie">
        <?php
            $page = $_GET["page"];
            include( 'navbar.php');
            include( 'pages/' . $page . '.php');
            include( 'footer.php');
            include( 'scripts.php');
        ?>
    </div>
</body>
</html>