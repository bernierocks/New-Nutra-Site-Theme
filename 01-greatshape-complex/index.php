<?php include('config.php'); ?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
    <META HTTP-EQUIV="PRAGMA" CONTENT="NO-CACHE">
    <META NAME="ROBOTS" CONTENT="ALL"> 
    <META NAME="ROBOTS" CONTENT="INDEX,NOFOLLOW"> 
 <META NAME="ROBOTS" CONTENT="NOINDEX,FOLLOW"> 
 <META NAME="ROBOTS" CONTENT="NONE">
 <META NAME="GOOGLEBOT" CONTENT="NOARCHIVE">
<title><?php echo $productName ?></title>
    
    <!-- CSS -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="css/style.css" rel="stylesheet">
    
    <!-- JS -->
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <!--[if lt IE 9]>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.1/html5shiv.js"></script>
    <![endif]-->
    <!--[if lt IE 9]>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.1/html5shiv.js"></script>
    <![endif]-->
    <script type="text/javascript" src="script/jquery.ez-bg-resize.js"></script>
    <script type="text/javascript" src="script/function.js"></script>
</head>

<body>


    <header>
        <div class="container"> 
            <div class="row">  
                <div class="col col-sm-12 col-lg-6"> 
                    <img src="images/logo.png" alt="<?php echo $productName ?>" title="<?php echo $productName ?>"  />        
                </div><!-- /.col6-->
                <div class="col col-sm-12 col-lg-6">   
                    <?php include('menu-inc.php')?>            
                </div><!-- /.col6-->
            </div><!-- /.row -->
        </div><!-- /.container -->
        
    
        
        
    </header><!-- /header -->

	
    
    
<div class="wrapper">

<!--CONTENT SECTION-->
<div class="content main-bg">
    <div class="container">
        <img src="images/text.png" /> 
        <ul class="bullet">
            <li>Specialized Diet Programs</li>
            <li>Fitness Programs</li>
            <li>Great Healthy Low Carb Recipes</li>
            <li>Meal Plans</li>
            <li>E-Magazine with motivational and informative articles</li>
        </ul>
        <a href="order-today.php" class="join-today col-orange" title="Join Today for only $<?php echo $rebillRate ?>/Mo.">Join Today for only $<?php echo $rebillRate ?>/Mo.</a>
    </div>

<div class="clearb"></div>

    <div class="note">
    <p class="col-brown"><strong>Health and fitness today have become a growing concern, not only in America but all over the world.</strong>
    We've addressed this need and offers our clients a total program that will help them get and stay fit,
    while helping them improve their quality of life. We've taken into account all the tools to motivate and
    help our clients enjoy every step to fitness, health, and total well being.</p>
    </div>

</div>
<!--/END CONTENT-->

<div class="clearb h20"></div>

<!--FOOTER SECTION-->
<?php include('footer-inc.php')?>

</div>
<!--/END-->
</body>
</html>
