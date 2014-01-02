<?php include("api_lib.php");saveinfo();include('config.php');
?>
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

<div class="wrapper white_bg">
<!--HEADER SECTION-->
<div class="clear"></div>
  	<div class="order_form">
    	<div class="floatL">Thank you for your membership</div>
    <div class="clear"></div>  
    </div>
<div class="header">
	<span class="logo"><img src="images/logo.png" alt="<?php echo $productName ?>" title="<?php echo $productName ?>"  /> </span>
	<?php include('menu-inc.php')?>
</div>
<!--CONTENT SECTION-->
  	 <div class="form">
    	<table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tbody><tr class="bggray-dark2">
          <td width="765" class="table_spacing table_spacing_bbottom">ITEM</td>
          <td colspan="2" align="right" class="table_spacing_borderright table_spacing_bbottom">PRICE (USD)</td>
        </tr>
        <tr class="bggray">
          <td class="table_spacing_bbottom"><?php echo $productName ?> - Monthly Membership </td>
          <td colspan="2" align="right" class="table_spacing_bbottomright">$<?php echo $rebillRate ?></td>
        </tr>
        <tr class="bggray-dark">
          <td class="table_spacing">&nbsp;</td>
          <td width="85" align="right" class="table_spacing_borderright f15bold">PAYMENT:</td>
          <td width="149" align="right" class="table_spacing f15bold">$<?php echo $rebillRate ?></td>
        </tr>
        <tr class="bggray-dark">
          <td class="table_spacing">&nbsp;</td>
          <td colspan="2" align="right" class="table_spacing_borderright f10gray">Monthly Payment (US Dollar)</td>
        </tr>
      </tbody></table>
    </div>
    
<div class="payment">
    	<h1 class="f15bold padL10">YOUR ORDER INFO</h1>
      <div class="payment_form">
      	<h1 class="f15bold">Account holder Personal Info</h1>
        <div class="payment_form_holder">
        	<table width="722" border="0" cellspacing="0" cellpadding="0" class="payment_table">
            <tbody><tr>
              <td width="145"> <?php echo ucfirst($_SESSION['cart']['firstName']); ?> <?php echo ucfirst($_SESSION['cart']['lastName']); ?><br />
                            <?php echo ucfirst($_SESSION['cart']['billingAddress1']); ?><br />
                            <?php echo ucfirst($_SESSION['cart']['billingCity']); ?>, <?php echo ucfirst($_SESSION['cart']['billingState']); ?><br />
<?php echo $billingCountry ?> <?php echo ucfirst($_SESSION['cart']['billingZip']); ?></td>
              </tr>
          </tbody></table>
        </div><br>

        <h1 class="f15bold">Members Login Url:</h1>
        <div class="payment_form_holder">
        	<table width="722" border="0" cellspacing="0" cellpadding="0" class="payment_table">
            <tbody><tr>
              <td width="145">Login URL: <a href="<?php echo $memberurl ?>" target="_blank"><?php echo $memberurl ?></a><br>
              Username: <?php echo ucfirst($_SESSION['cart']['email']); ?><br>
Pass: <?php echo ucfirst($_SESSION['cart']['billingZip']); ?></td>
              </tr>
          </tbody></table>
        </div>
        <br>

        <h1 class="f15bold">Payment Information</h1>
        <div class="payment_form_holder">
        	<table width="722" border="0" cellspacing="0" cellpadding="0" class="payment_table">
            <tbody><tr>
              <td width="145"> ************<?php echo substr($_SESSION['cart']['creditCardNumber'],-4);?><br />
                         
							The charge will appear on your credit card as: <?php echo $midDescriptor ?>. <br />
Keep a copy of the transaction for your records.</td>
              </tr>
          </tbody></table>
        </div>
        
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
