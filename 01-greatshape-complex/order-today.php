<?php include("api_lib.php");include('config.php');redirectToHTTPS();saveinfo();

if( $_SERVER['REQUEST_METHOD'] == 'POST' and !$_SESSION['cart']['process_main'])
{
$result = process_api($rebillRate);
//exit;
//echo $arrResult['id'];
//echo $json;

$error = false;


if($result['response']=="2")
{
	$error = true;
	$err .= $result['responsetext'];
}
elseif($result['response']=="3")
{
	    $error = true;
		$err .= $result['responsetext'];
		//print_r($arrResult);
} 

elseif($result['response']=="1") {
	// success
	header("location: receipt.php?purchase_id=" . $result['transactionid']); 
	emailReceipt($midPhone,$midEmail,$rebillRate,$productName,$domain,$result['transactionid'],$mailList,$memberurl);
	createUser();
	exit;
	echo "success";
} 


else {
	// unknown error notify admin
	$error = true;
	mail("lenard.arreola@gmail.com", "mid error", implode("|", $arrResult));
	$err .=  "Transaction error. Admin has been notified to correct this error. Please try again later";
	//print_r($arrResult);
}

}
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
<title>Become a Member Today</title>
<link type="text/css" href="css/style.css" rel="stylesheet">
<script type="text/javascript" src="script/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="script/jquery.ez-bg-resize.js"></script>
<script type="text/javascript" src="script/function.js"></script>
</head>

<body>

<div class="wrapper white_bg">
<!--HEADER SECTION-->
<div class="header">
	<span class="logo"><img src="images/logo.png" alt="<?php echo $productName ?>" title="<?php echo $productName ?>"  /> </span>
	<?php include('menu-inc.php')?>
</div>
<!--CONTENT SECTION-->
  	<div class="securepayment1"></div>
    <div class="secure_payment_website_for_box">
       <span class="secure_payment_website_for">Secure Payment For:</span>
       <span class="secure_payment_website_for_name"><?php echo $productName ?></span>
    </div>
    <div class="clear"></div>
  	<div class="order_form">
    	<div class="floatL">256 Bit Encryption</div>
    	<div class="floatR">SECURE PAYMENT FORM</div>
    <div class="clear"></div>  
    </div>
    
       <div class="form">
    	<table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tbody><tr class="bggray-dark2">
          <td width="765" class="table_spacing table_spacing_bbottom">ITEM</td>
          <td colspan="2" align="right" class="table_spacing_borderright table_spacing_bbottom">PRICE (USD)</td>
        </tr>
        <tr class="bggray">
          <td class="table_spacing_bbottom"><?php echo $productName ?> - Monthly Membership </td>
          <td colspan="2" align="right" class="table_spacing_bbottomright">US$<?php echo $rebillRate ?></td>
        </tr>
        <tr class="bggray-dark">
          <td class="table_spacing">&nbsp;</td>
          <td align="right" class="table_spacing_borderright f15bold">PAYMENT:</td>
          <td align="right" class="table_spacing f15bold">US$<?php echo $rebillRate ?></td>
        </tr>
        <tr class="bggray-dark">
          <td class="table_spacing">&nbsp;</td>
          <td colspan="2" align="right" class="table_spacing_borderright f10gray">Monthly Payment (US Dollar)</td>
        </tr>
      </tbody></table>
    </div>
    
    <div class="payment">
    <?php if($error): ?>
<center style="background-color:#c00; color:#fff;"><span> <?php echo $err; ?></span></center>
<?php endif; ?>
    	<h1 class="f15bold padL10">YOUR PAYMENT</h1>
      <div class="payment_form">
      	<h1 class="f15bold">Pay with Credit or Debit Card</h1>
        <div class="payment_form_holder">
        <form action="order-today.php" method="post">
        	<table width="100%" border="0" cellspacing="0" cellpadding="0" class="payment_table">
            <tbody><tr>
              <td width="145">First Name*</td>
              <td width="577"><input type="text" required name="firstName" class="inputstyle" value="<?php echo ucfirst($_SESSION['cart']['firstName']); ?>"></td>
            </tr>
            <tr>
              <td>Last Name*</td>
              <td><input required name="lastName" value="<?php echo ucfirst($_SESSION['cart']['lastName']); ?>" type="text" class="inputstyle"></td>
            </tr>
             <tr>
              <td>Billing Address*</td>
              <td><input name="billingAddress1" required type="text" class="inputstyle" value="<?php echo ucfirst($_SESSION['cart']['billingAddress1']); ?>"></td>
            </tr>
            <tr>
              <td>City*</td>
              <td><input name="billingCity" required type="text" class="inputstyle" value="<?php echo ucfirst($_SESSION['cart']['billingCity']); ?>"></td>
            </tr>
            <tr>
              <td>State/Province*</td>
              <td>
              	<select name="billingState" required class="selectstyle"> 
                   <option value="" <?php if ($_SESSION['cart']['billingState'] == "") echo "selected='selected'"; ?> >State</option>
                                            <option value="AL" <?php if ($_SESSION['cart']['billingState'] == "AL") echo "selected='selected'"; ?>> Alabama</option>
                                            <option value="AK" <?php if ($_SESSION['cart']['billingState'] == "AK") echo "selected='selected'"; ?>>Alaska</option>
                                            <option value="AZ" <?php if ($_SESSION['cart']['billingState'] == "AZ") echo "selected='selected'"; ?>>Arizona</option>
                                            <option value="AR" <?php if ($_SESSION['cart']['billingState'] == "AR") echo "selected='selected'"; ?>>Arkansas</option>
                                            <option value="CA" <?php if ($_SESSION['cart']['billingState'] == "CA") echo "selected='selected'"; ?>>California</option>
                                            <option value="CO" <?php if ($_SESSION['cart']['billingState'] == "CO") echo "selected='selected'"; ?>>Colorado</option>
                                            <option value="CT" <?php if ($_SESSION['cart']['billingState'] == "CT") echo "selected='selected'"; ?>>Connecticut</option>
                                            <option value="DE" <?php if ($_SESSION['cart']['billingState'] == "DE") echo "selected='selected'"; ?>>Delaware</option>
                                            <option value="DC" <?php if ($_SESSION['cart']['billingState'] == "DC") echo "selected='selected'"; ?>>District of Columbia</option>
                                            <option value="FL" <?php if ($_SESSION['cart']['billingState'] == "FL") echo "selected='selected'"; ?>>Florida</option>
                                            <option value="GA" <?php if ($_SESSION['cart']['billingState'] == "GA") echo "selected='selected'"; ?>>Georgia</option>
                                            <option value="HI" <?php if ($_SESSION['cart']['billingState'] == "HI") echo "selected='selected'"; ?>>Hawaii</option>
                                            <option value="ID" <?php if ($_SESSION['cart']['billingState'] == "ID") echo "selected='selected'"; ?>>Idaho</option>
                                            <option value="IL" <?php if ($_SESSION['cart']['billingState'] == "IL") echo "selected='selected'"; ?>>Illinois</option>
                                            <option value="IN" <?php if ($_SESSION['cart']['billingState'] == "IN") echo "selected='selected'"; ?>>Indiana</option>
                                            <option value="IA" <?php if ($_SESSION['cart']['billingState'] == "IA") echo "selected='selected'"; ?>>Iowa</option>
                                            <option value="KS" <?php if ($_SESSION['cart']['billingState'] == "KS") echo "selected='selected'"; ?>>Kansas</option>
                                            <option value="KY" <?php if ($_SESSION['cart']['billingState'] == "KY") echo "selected='selected'"; ?>>Kentucky</option>
                                            <option value="LA" <?php if ($_SESSION['cart']['billingState'] == "LA") echo "selected='selected'"; ?>>Louisiana</option>
                                            <option value="ME" <?php if ($_SESSION['cart']['billingState'] == "ME") echo "selected='selected'"; ?>>Maine</option>
                                            <option value="MD" <?php if ($_SESSION['cart']['billingState'] == "MD") echo "selected='selected'"; ?>>Maryland</option>
                                            <option value="MA" <?php if ($_SESSION['cart']['billingState'] == "MA") echo "selected='selected'"; ?>>Massachusetts</option>
                                            <option value="MI" <?php if ($_SESSION['cart']['billingState'] == "MI") echo "selected='selected'"; ?>>Michigan</option>
                                            <option value="MN" <?php if ($_SESSION['cart']['billingState'] == "MN") echo "selected='selected'"; ?>>Minnesota</option>
                                            <option value="MS" <?php if ($_SESSION['cart']['billingState'] == "MS") echo "selected='selected'"; ?>>Mississippi</option>
                                            <option value="MO" <?php if ($_SESSION['cart']['billingState'] == "MO") echo "selected='selected'"; ?>>Missouri</option>
                                            <option value="MT" <?php if ($_SESSION['cart']['billingState'] == "MT") echo "selected='selected'"; ?>>Montana</option>
                                            <option value="NE" <?php if ($_SESSION['cart']['billingState'] == "NE") echo "selected='selected'"; ?>>Nebraska</option>
                                            <option value="NV" <?php if ($_SESSION['cart']['billingState'] == "NV") echo "selected='selected'"; ?>>Nevada</option>
                                            <option value="NH" <?php if ($_SESSION['cart']['billingState'] == "NH") echo "selected='selected'"; ?>>New Hampshire</option>
                                            <option value="NJ" <?php if ($_SESSION['cart']['billingState'] == "NJ") echo "selected='selected'"; ?>>New Jersey</option>
                                            <option value="NM" <?php if ($_SESSION['cart']['billingState'] == "NM") echo "selected='selected'"; ?>>New Mexico</option>
                                            <option value="NY" <?php if ($_SESSION['cart']['billingState'] == "NY") echo "selected='selected'"; ?>>New York</option>
                                            <option value="NC" <?php if ($_SESSION['cart']['billingState'] == "NC") echo "selected='selected'"; ?>>North Carolina</option>
                                            <option value="ND" <?php if ($_SESSION['cart']['billingState'] == "ND") echo "selected='selected'"; ?>>North Dakota</option>
                                            <option value="OH" <?php if ($_SESSION['cart']['billingState'] == "OH") echo "selected='selected'"; ?>>Ohio</option>
                                            <option value="OK" <?php if ($_SESSION['cart']['billingState'] == "OK") echo "selected='selected'"; ?>>Oklahoma</option>
                                            <option value="OR" <?php if ($_SESSION['cart']['billingState'] == "OR") echo "selected='selected'"; ?>>Oregon</option>
                                            <option value="PA" <?php if ($_SESSION['cart']['billingState'] == "PA") echo "selected='selected'"; ?>>Pennsylvania</option>
                                            <option value="RI" <?php if ($_SESSION['cart']['billingState'] == "RI") echo "selected='selected'"; ?>>Rhode Island</option>
                                            <option value="SC" <?php if ($_SESSION['cart']['billingState'] == "SC") echo "selected='selected'"; ?>>South Carolina</option>
                                            <option value="SD" <?php if ($_SESSION['cart']['billingState'] == "SD") echo "selected='selected'"; ?>>South Dakota</option>
                                            <option value="TN" <?php if ($_SESSION['cart']['billingState'] == "TB") echo "selected='selected'"; ?>>Tennessee</option>
                                            <option value="TX" <?php if ($_SESSION['cart']['billingState'] == "TX") echo "selected='selected'"; ?>>Texas</option>
                                            <option value="UT" <?php if ($_SESSION['cart']['billingState'] == "UT") echo "selected='selected'"; ?>>Utah</option>
                                            <option value="VT" <?php if ($_SESSION['cart']['billingState'] == "VT") echo "selected='selected'"; ?>>Vermont</option>
                                            <option value="VA" <?php if ($_SESSION['cart']['billingState'] == "VA") echo "selected='selected'"; ?>>Virginia</option>
                                            <option value="WA" <?php if ($_SESSION['cart']['billingState'] == "WA") echo "selected='selected'"; ?>>Washington</option>
                                            <option value="WV" <?php if ($_SESSION['cart']['billingState'] == "WV") echo "selected='selected'"; ?>>West Virginia</option>
                                            <option value="WI" <?php if ($_SESSION['cart']['billingState'] == "WI") echo "selected='selected'"; ?>>Wisconsin</option>
                                            <option value="WY" <?php if ($_SESSION['cart']['billingState'] == "WY") echo "selected='selected'"; ?>>Wyoming</option>
                </select>
              </td>
            </tr>
            <tr>
              <td>Zip or Postal Code*</td>
              <td><input type="text" name="billingZip" required class="inputstyle" onkeypress="return isNumber(event)" maxlength="5" value="<?php echo ucfirst($_SESSION['cart']['billingZip']); ?>"></td>
            </tr>
            <tr>
              <td>Telephone Number*</td>
              <td><input type="text" name="phone" required class="inputstyle" value="<?php echo ucfirst($_SESSION['cart']['phone']); ?>"></td>
            </tr>
            <tr>
              <td>Email*</td>
              <td><input name="email" type="email" required class="inputstyle" value="<?php echo ucfirst($_SESSION['cart']['email']); ?>"></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><div class="cards"></div></td>
            </tr>
            <tr>
              <td>Card Number*</td>
              <td><input type="text" name="creditCardNumber" required class="inputstyle" maxlength="16" value="<?php echo $_SESSION['cart']['creditCardNumber'] ?>"></td>
            </tr>
            <tr>
              <td>Card Expiration Date*</td>
              <td>
              	<div class="floatL">
                	<select name="fields_expmonth" class="selectstyle" required>
                    <option value="" selected="selected">Month</option>
                    <option value="01">01</option>
                    <option value="02">02</option>
                    <option value="03">03</option>
                    <option value="04">04</option>
                    <option value="05">05</option>
                    <option value="06">06</option>
                    <option value="07">07</option>
                    <option value="08">08</option>
                    <option value="09">09</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                  </select>
                </div>
                <div class="floatL center_space">/</div>
              	<div class="floatL">
                	<select name="fields_expyear" class="selectstyle" required>
                    <option value="" selected="selected">Year</option>
                    <option value="2011">2011</option>
                    <option value="2012">2012</option>
                    <option value="2013">2013</option>
                    <option value="2014">2014</option>
                    <option value="2015">2015</option>
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                  </select>
                </div>
              </td>
            </tr>
            <tr>
              <td>CW2*</td>
              <td>
              	<div class="floatL"><input name="CVV" type="text" class="inputstyle_small" required onkeypress="return isNumber(event)" ></div>
                <div class="floatL center_space"><h1><a href="images/cvv.png" target="_blank">What's This?</a></h1></div>
              </td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><input type="checkbox" class="nospace" required> 
              * By ordering a product through our website, you agree to be enrolled in <?php echo $domain ?>. You agree that your card will be charged $<?php echo $rebillRate ?> for continued access to all of the tools, support and training <?php echo $domain ?> provides. Your monthly membership will recur at $<?php echo $rebillRate ?> every month until you cancel. You can call <?php echo $midPhone ?> to cancel your monthly membership at any time.</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td class="pt20"><input type="submit" value="PAY NOW" class="paynow_btn"></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td class="f10gray">*indicate required field.</td>
            </tr>
          </tbody></table>
          </form>
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
