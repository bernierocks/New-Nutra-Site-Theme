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
<link type="text/css" href="css/style.css" rel="stylesheet">
<script type="text/javascript" src="script/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="script/jquery.ez-bg-resize.js"></script>
<script type="text/javascript" src="script/function.js"></script>
</head>

<body>

<div class="wrapper">
<!--HEADER SECTION-->
<div class="header">
	<span class="logo"><img src="images/logo.png" alt="<?php echo $productName ?>" title="<?php echo $productName ?>"  /> </span>
	<?php include('menu-inc.php')?>
</div>

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
