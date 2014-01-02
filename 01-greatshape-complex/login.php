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
<title>Title</title>
<link type="text/css" href="css/style.css" rel="stylesheet">
<script type="text/javascript" src="script/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="script/jquery.ez-bg-resize.js"></script>
<script type="text/javascript" src="script/function.js"></script>
</head>

<body>

<div class="wrapper">
<!--HEADER SECTION-->
<div class="header">
	<span class="logo"><?php echo $productName ?></span>
	<?php include('menu-inc.php')?>
</div>
<!--CONTENT SECTION-->
<div class="login_form">
<h1 class="f15bold">To access the private area of this site, please login</h1>
<div class="payment_form_holder">
<form action="http://members.maxdietmentor.com" method="post">
<table width="722" cellspacing="0" cellpadding="0" border="0" class="payment_table">
<tbody>
<tr>
<td width="145">Username*</td>
<td width="577"><input type="text" name="username" class="inputstyle" /></td>
</tr>
<tr>
<td>Password*</td>
<td><input type="password" name="password" class="inputstyle" /></td>
</tr>
<tr>
<td>&nbsp;</td>
<td><input type="checkbox" class="nospace" /> Remember Me</td>
</tr>
<tr>
<td>&nbsp;</td>
<td class="pt20"><input type="button" id="submitLogin" class="paynow_btn" value="LOGIN" /></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
</tbody>
</table></form></div>
<p></p></div>
<!--/END CONTENT-->

<div class="clearb h20"></div>

<!--FOOTER SECTION-->
<?php include('footer-inc.php')?>

</div>
<!--/END-->
</body>
</html>
