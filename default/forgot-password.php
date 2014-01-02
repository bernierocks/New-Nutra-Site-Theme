<?php include('config.php'); ?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
<h1 class="f15bold">Resetting Your Password</h1>
<div class="payment_form_holder">
<p class="padT10">Please enter the e-mail address for your account. A verification token will be sent to you. Once you have received the token, you will be able to choose a new password for your account.</p>
<table width="722" cellspacing="0" cellpadding="0" border="0" class="payment_table">
<tbody>
<tr>
<td width="145">Email*</td>
<td><input type="text" class="inputstyle"></td>
</tr>

<tr>
<td>&nbsp;</td>
<td class="pt20"><input type="button" class="paynow_btn" value="SUBMIT"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="forgot-password">*Forget Password?</a></td>
</tr>
</tbody>
</table></div>
<p></p></div>
<!--/END CONTENT-->

<div class="clearb h20"></div>

<!--FOOTER SECTION-->
<?php include('footer-inc.php')?>

</div>
<!--/END-->
</body>
</html>
