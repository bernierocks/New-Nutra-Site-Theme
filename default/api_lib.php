<?php

session_start();
ini_set('display_errors','off');


define("APPROVED", 1);
define("DECLINED", 2);
define("ERROR", 3);

class gwapi {

// Initial Setting Functions

  function setLogin($username, $password) {
    $this->login['username'] = $username;
    $this->login['password'] = $password;
  }

  function setOrder($orderid,
        $orderdescription,
        $tax,
        $shipping,
        $ponumber,
        $ipaddress) {
    $this->order['orderid']          = $orderid;
    $this->order['orderdescription'] = $orderdescription;
    $this->order['tax']              = $tax;
    $this->order['shipping']         = $shipping;
    $this->order['ponumber']         = $ponumber;
    $this->order['ipaddress']        = $ipaddress;
  }

  function setBilling($firstname,
        $lastname,
        $company,
        $address1,
        $address2,
        $city,
        $state,
        $zip,
        $country,
        $phone,
        $fax,
        $email,
        $website) {
    $this->billing['firstname'] = $firstname;
    $this->billing['lastname']  = $lastname;
    $this->billing['company']   = $company;
    $this->billing['address1']  = $address1;
    $this->billing['address2']  = $address2;
    $this->billing['city']      = $city;
    $this->billing['state']     = $state;
    $this->billing['zip']       = $zip;
    $this->billing['country']   = $country;
    $this->billing['phone']     = $phone;
    $this->billing['fax']       = $fax;
    $this->billing['email']     = $email;
    $this->billing['website']   = $website;
  }

  function setShipping($firstname,
        $lastname,
        $company,
        $address1,
        $address2,
        $city,
        $state,
        $zip,
        $country,
        $email) {
    $this->shipping['firstname'] = $firstname;
    $this->shipping['lastname']  = $lastname;
    $this->shipping['company']   = $company;
    $this->shipping['address1']  = $address1;
    $this->shipping['address2']  = $address2;
    $this->shipping['city']      = $city;
    $this->shipping['state']     = $state;
    $this->shipping['zip']       = $zip;
    $this->shipping['country']   = $country;
    $this->shipping['email']     = $email;
  }

  // Transaction Functions

  function doSale($amount, $ccnumber, $ccexp, $cvv="") {

    $query  = "";
    // Login Information
    $query .= "username=" . urlencode($this->login['username']) . "&";
    $query .= "password=" . urlencode($this->login['password']) . "&";
    // Sales Information
    $query .= "ccnumber=" . urlencode($ccnumber) . "&";
    $query .= "ccexp=" . urlencode($ccexp) . "&";
    $query .= "amount=" . urlencode(number_format($amount,2,".","")) . "&";
    $query .= "cvv=" . urlencode($cvv) . "&";
    // Order Information
    $query .= "ipaddress=" . urlencode($this->order['ipaddress']) . "&";
    $query .= "orderid=" . urlencode($this->order['orderid']) . "&";
    $query .= "orderdescription=" . urlencode($this->order['orderdescription']) . "&";
    $query .= "tax=" . urlencode(number_format($this->order['tax'],2,".","")) . "&";
    $query .= "shipping=" . urlencode(number_format($this->order['shipping'],2,".","")) . "&";
    $query .= "ponumber=" . urlencode($this->order['ponumber']) . "&";
    // Billing Information
    $query .= "firstname=" . urlencode($this->billing['firstname']) . "&";
    $query .= "lastname=" . urlencode($this->billing['lastname']) . "&";
    $query .= "company=" . urlencode($this->billing['company']) . "&";
    $query .= "address1=" . urlencode($this->billing['address1']) . "&";
    $query .= "address2=" . urlencode($this->billing['address2']) . "&";
    $query .= "city=" . urlencode($this->billing['city']) . "&";
    $query .= "state=" . urlencode($this->billing['state']) . "&";
    $query .= "zip=" . urlencode($this->billing['zip']) . "&";
    $query .= "country=" . urlencode($this->billing['country']) . "&";
    $query .= "phone=" . urlencode($this->billing['phone']) . "&";
    $query .= "fax=" . urlencode($this->billing['fax']) . "&";
    $query .= "email=" . urlencode($this->billing['email']) . "&";
    $query .= "website=" . urlencode($this->billing['website']) . "&";
    // Shipping Information
    $query .= "shipping_firstname=" . urlencode($this->shipping['firstname']) . "&";
    $query .= "shipping_lastname=" . urlencode($this->shipping['lastname']) . "&";
    $query .= "shipping_company=" . urlencode($this->shipping['company']) . "&";
    $query .= "shipping_address1=" . urlencode($this->shipping['address1']) . "&";
    $query .= "shipping_address2=" . urlencode($this->shipping['address2']) . "&";
    $query .= "shipping_city=" . urlencode($this->shipping['city']) . "&";
    $query .= "shipping_state=" . urlencode($this->shipping['state']) . "&";
    $query .= "shipping_zip=" . urlencode($this->shipping['zip']) . "&";
    $query .= "shipping_country=" . urlencode($this->shipping['country']) . "&";
    $query .= "shipping_email=" . urlencode($this->shipping['email']) . "&";
    $query .= "type=sale";
    return $this->_doPost($query);
  }

  function doAuth($amount, $ccnumber, $ccexp, $cvv="") {

    $query  = "";
    // Login Information
    $query .= "username=" . urlencode($this->login['username']) . "&";
    $query .= "password=" . urlencode($this->login['password']) . "&";
    // Sales Information
    $query .= "ccnumber=" . urlencode($ccnumber) . "&";
    $query .= "ccexp=" . urlencode($ccexp) . "&";
    $query .= "amount=" . urlencode(number_format($amount,2,".","")) . "&";
    $query .= "cvv=" . urlencode($cvv) . "&";
    // Order Information
    $query .= "ipaddress=" . urlencode($this->order['ipaddress']) . "&";
    $query .= "orderid=" . urlencode($this->order['orderid']) . "&";
    $query .= "orderdescription=" . urlencode($this->order['orderdescription']) . "&";
    $query .= "tax=" . urlencode(number_format($this->order['tax'],2,".","")) . "&";
    $query .= "shipping=" . urlencode(number_format($this->order['shipping'],2,".","")) . "&";
    $query .= "ponumber=" . urlencode($this->order['ponumber']) . "&";
    // Billing Information
    $query .= "firstname=" . urlencode($this->billing['firstname']) . "&";
    $query .= "lastname=" . urlencode($this->billing['lastname']) . "&";
    $query .= "company=" . urlencode($this->billing['company']) . "&";
    $query .= "address1=" . urlencode($this->billing['address1']) . "&";
    $query .= "address2=" . urlencode($this->billing['address2']) . "&";
    $query .= "city=" . urlencode($this->billing['city']) . "&";
    $query .= "state=" . urlencode($this->billing['state']) . "&";
    $query .= "zip=" . urlencode($this->billing['zip']) . "&";
    $query .= "country=" . urlencode($this->billing['country']) . "&";
    $query .= "phone=" . urlencode($this->billing['phone']) . "&";
    $query .= "fax=" . urlencode($this->billing['fax']) . "&";
    $query .= "email=" . urlencode($this->billing['email']) . "&";
    $query .= "website=" . urlencode($this->billing['website']) . "&";
    // Shipping Information
    $query .= "shipping_firstname=" . urlencode($this->shipping['firstname']) . "&";
    $query .= "shipping_lastname=" . urlencode($this->shipping['lastname']) . "&";
    $query .= "shipping_company=" . urlencode($this->shipping['company']) . "&";
    $query .= "shipping_address1=" . urlencode($this->shipping['address1']) . "&";
    $query .= "shipping_address2=" . urlencode($this->shipping['address2']) . "&";
    $query .= "shipping_city=" . urlencode($this->shipping['city']) . "&";
    $query .= "shipping_state=" . urlencode($this->shipping['state']) . "&";
    $query .= "shipping_zip=" . urlencode($this->shipping['zip']) . "&";
    $query .= "shipping_country=" . urlencode($this->shipping['country']) . "&";
    $query .= "shipping_email=" . urlencode($this->shipping['email']) . "&";
    $query .= "type=auth";
    return $this->_doPost($query);
  }

  function doCredit($amount, $ccnumber, $ccexp) {

    $query  = "";
    // Login Information
    $query .= "username=" . urlencode($this->login['username']) . "&";
    $query .= "password=" . urlencode($this->login['password']) . "&";
    // Sales Information
    $query .= "ccnumber=" . urlencode($ccnumber) . "&";
    $query .= "ccexp=" . urlencode($ccexp) . "&";
    $query .= "amount=" . urlencode(number_format($amount,2,".","")) . "&";
    // Order Information
    $query .= "ipaddress=" . urlencode($this->order['ipaddress']) . "&";
    $query .= "orderid=" . urlencode($this->order['orderid']) . "&";
    $query .= "orderdescription=" . urlencode($this->order['orderdescription']) . "&";
    $query .= "tax=" . urlencode(number_format($this->order['tax'],2,".","")) . "&";
    $query .= "shipping=" . urlencode(number_format($this->order['shipping'],2,".","")) . "&";
    $query .= "ponumber=" . urlencode($this->order['ponumber']) . "&";
    // Billing Information
    $query .= "firstname=" . urlencode($this->billing['firstname']) . "&";
    $query .= "lastname=" . urlencode($this->billing['lastname']) . "&";
    $query .= "company=" . urlencode($this->billing['company']) . "&";
    $query .= "address1=" . urlencode($this->billing['address1']) . "&";
    $query .= "address2=" . urlencode($this->billing['address2']) . "&";
    $query .= "city=" . urlencode($this->billing['city']) . "&";
    $query .= "state=" . urlencode($this->billing['state']) . "&";
    $query .= "zip=" . urlencode($this->billing['zip']) . "&";
    $query .= "country=" . urlencode($this->billing['country']) . "&";
    $query .= "phone=" . urlencode($this->billing['phone']) . "&";
    $query .= "fax=" . urlencode($this->billing['fax']) . "&";
    $query .= "email=" . urlencode($this->billing['email']) . "&";
    $query .= "website=" . urlencode($this->billing['website']) . "&";
    $query .= "type=credit";
    return $this->_doPost($query);
  }

  function doOffline($authorizationcode, $amount, $ccnumber, $ccexp) {

    $query  = "";
    // Login Information
    $query .= "username=" . urlencode($this->login['username']) . "&";
    $query .= "password=" . urlencode($this->login['password']) . "&";
    // Sales Information
    $query .= "ccnumber=" . urlencode($ccnumber) . "&";
    $query .= "ccexp=" . urlencode($ccexp) . "&";
    $query .= "amount=" . urlencode(number_format($amount,2,".","")) . "&";
    $query .= "authorizationcode=" . urlencode($authorizationcode) . "&";
    // Order Information
    $query .= "ipaddress=" . urlencode($this->order['ipaddress']) . "&";
    $query .= "orderid=" . urlencode($this->order['orderid']) . "&";
    $query .= "orderdescription=" . urlencode($this->order['orderdescription']) . "&";
    $query .= "tax=" . urlencode(number_format($this->order['tax'],2,".","")) . "&";
    $query .= "shipping=" . urlencode(number_format($this->order['shipping'],2,".","")) . "&";
    $query .= "ponumber=" . urlencode($this->order['ponumber']) . "&";
    // Billing Information
    $query .= "firstname=" . urlencode($this->billing['firstname']) . "&";
    $query .= "lastname=" . urlencode($this->billing['lastname']) . "&";
    $query .= "company=" . urlencode($this->billing['company']) . "&";
    $query .= "address1=" . urlencode($this->billing['address1']) . "&";
    $query .= "address2=" . urlencode($this->billing['address2']) . "&";
    $query .= "city=" . urlencode($this->billing['city']) . "&";
    $query .= "state=" . urlencode($this->billing['state']) . "&";
    $query .= "zip=" . urlencode($this->billing['zip']) . "&";
    $query .= "country=" . urlencode($this->billing['country']) . "&";
    $query .= "phone=" . urlencode($this->billing['phone']) . "&";
    $query .= "fax=" . urlencode($this->billing['fax']) . "&";
    $query .= "email=" . urlencode($this->billing['email']) . "&";
    $query .= "website=" . urlencode($this->billing['website']) . "&";
    // Shipping Information
    $query .= "shipping_firstname=" . urlencode($this->shipping['firstname']) . "&";
    $query .= "shipping_lastname=" . urlencode($this->shipping['lastname']) . "&";
    $query .= "shipping_company=" . urlencode($this->shipping['company']) . "&";
    $query .= "shipping_address1=" . urlencode($this->shipping['address1']) . "&";
    $query .= "shipping_address2=" . urlencode($this->shipping['address2']) . "&";
    $query .= "shipping_city=" . urlencode($this->shipping['city']) . "&";
    $query .= "shipping_state=" . urlencode($this->shipping['state']) . "&";
    $query .= "shipping_zip=" . urlencode($this->shipping['zip']) . "&";
    $query .= "shipping_country=" . urlencode($this->shipping['country']) . "&";
    $query .= "shipping_email=" . urlencode($this->shipping['email']) . "&";
    $query .= "type=offline";
    return $this->_doPost($query);
  }

  function doCapture($transactionid, $amount =0) {

    $query  = "";
    // Login Information
    $query .= "username=" . urlencode($this->login['username']) . "&";
    $query .= "password=" . urlencode($this->login['password']) . "&";
    // Transaction Information
    $query .= "transactionid=" . urlencode($transactionid) . "&";
    if ($amount>0) {
        $query .= "amount=" . urlencode(number_format($amount,2,".","")) . "&";
    }
    $query .= "type=capture";
    return $this->_doPost($query);
  }

  function doVoid($transactionid) {

    $query  = "";
    // Login Information
    $query .= "username=" . urlencode($this->login['username']) . "&";
    $query .= "password=" . urlencode($this->login['password']) . "&";
    // Transaction Information
    $query .= "transactionid=" . urlencode($transactionid) . "&";
    $query .= "type=void";
    return $this->_doPost($query);
  }

  function doRefund($transactionid, $amount = 0) {

    $query  = "";
    // Login Information
    $query .= "username=" . urlencode($this->login['username']) . "&";
    $query .= "password=" . urlencode($this->login['password']) . "&";
    // Transaction Information
    $query .= "transactionid=" . urlencode($transactionid) . "&";
    if ($amount>0) {
        $query .= "amount=" . urlencode(number_format($amount,2,".","")) . "&";
    }
    $query .= "type=refund";
    return $this->_doPost($query);
  }

  function _doPost($query) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://secure.nmi.com/api/transact.php");
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 15);
    curl_setopt($ch, CURLOPT_TIMEOUT, 15);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

    curl_setopt($ch, CURLOPT_POSTFIELDS, $query);
    curl_setopt($ch, CURLOPT_POST, 1);

    if (!($data = curl_exec($ch))) {
        return ERROR;
    }
    curl_close($ch);
    unset($ch);
    //print "\n$data\n";
    $data = explode("&",$data);
    for($i=0;$i<count($data);$i++) {
        $rdata = explode("=",$data[$i]);
        $this->responses[$rdata[0]] = $rdata[1];
    }
    return $this->responses['response'];
  }
}


function saveinfo()
{
	foreach($_REQUEST as $key=>$value)
	{
		if($value)
		{
			$_SESSION['cart'][$key] = $value; 
		}
	}
	
	if($_REQUEST['shipToFirstName']) $_SESSION['cart']['firstName'] = $_REQUEST['shipToFirstName'];
	if($_REQUEST['shipToLastName']) $_SESSION['cart']['lastName'] = $_REQUEST['shipToLastName'];
	if($_REQUEST['shipToAddress1']) $_SESSION['cart']['billingAddress1'] = $_REQUEST['shipToAddress1'];
	if($_REQUEST['shipToCity']) $_SESSION['cart']['billingCity'] = $_REQUEST['shipToCity'];
	if($_REQUEST['shipToState']) $_SESSION['cart']['billingState'] = $_REQUEST['shipToState'];
	if($_REQUEST['shipToPostalCode']) $_SESSION['cart']['billingZip'] = $_REQUEST['shipToPostalCode'];
	if($_REQUEST['shipToPhone']) $_SESSION['cart']['phone'] = $_REQUEST['shipToPhone'];	
	if($_REQUEST['cc_number']) $_SESSION['cart']['creditCardNumber'] = $_REQUEST['cc_number'];
	if($_REQUEST['cc_month']) $_SESSION['cart']['fields_expmonth'] = $_REQUEST['cc_month'];
	if($_REQUEST['cc_year']) $_SESSION['cart']['fields_expyear'] = $_REQUEST['cc_year'];
	if($_REQUEST['cc_cvv']) $_SESSION['cart']['CVV'] = $_REQUEST['cc_cvv'];
	
	if(isset($_SESSION['cart']['creditCardNumber']))
	{	
		if(substr($_SESSION['cart']['creditCardNumber'] , 0,1)=="3"){
			 $_SESSION['cart']['cc_type'] = "amex";
		}
		elseif(substr($_SESSION['cart']['creditCardNumber'] , 0,1)=="4"){
			 $_SESSION['cart']['cc_type'] = "visa";
		}
		elseif(substr($_SESSION['cart']['creditCardNumber'] , 0,1)=="5"){
			 $_SESSION['cart']['cc_type'] = "master";
		}
		elseif(substr($_SESSION['cart']['creditCardNumber'] , 0,1)=="6"){
			 $_SESSION['cart']['cc_type'] = "discover";
		}
		else{
			$_SESSION['cart']['cc_type'] = "visa";
		}
	
	}

}

function process_api($pValue) {
$gw = new gwapi;
//$gw->setLogin("THEINBE-TOPDIET", "Garckk3233");
$gw->setLogin("demo", "password");
$gw->setBilling($_SESSION['cart']['firstName'],$_SESSION['cart']['lastName'],"",$_SESSION['cart']['billingAddress1'],"", $_SESSION['cart']['billingCity'],
        $_SESSION['cart']['billingState'],$_SESSION['cart']['billingZip'],"US",$_SESSION['cart']['phone'],"",$_SESSION['cart']['email'],
        "");
$gw->setShipping($_SESSION['cart']['firstName'],$_SESSION['cart']['lastName'],"",$_SESSION['cart']['billingAddress1'],"", $_SESSION['cart']['billingCity'],
        $_SESSION['cart']['billingState'],$_SESSION['cart']['billingZip'],"US",$_SESSION['cart']['phone'],"",$_SESSION['cart']['email'],
        "");
//$gw->setOrder("1234","Big Order",1, 2, "PO1234","65.192.14.10");

$r = $gw->doSale($pValue,$_SESSION['cart']['creditCardNumber'],$_SESSION['cart']['fields_expmonth'].$_SESSION['cart']['fields_expyear'],$_SESSION['cart']['CVV']);
$data=array('response'=>$gw->responses['response'],"responsetext"=>$gw->responses['responsetext'],"transactionid"=>$gw->responses['transactionid']);
return $data;
}


function emailReceipt($fNumber,$fEmail,$fCharge,$fName,$fDomain,$fTransID,$mList,$memUrl){
$to = $_SESSION['cart']['email'];
$subject = "Order Confirmation: ".$fName;
$message = "Dear " .ucfirst($_SESSION['cart']['firstName']) ." ". ucfirst($_SESSION['cart']['lastName']) . ",\n\n".
"Thank you for being a member and congratulations on taking your next steps to a whole new feeling of life. Your order details are:" ."\n\n".
"Membership:" .$fName. "(".$fDomain.")". "\n".
"Your Transaction # :".$fTransID. "\n\n".
"Member Details:"."\n\n".
ucfirst($_SESSION['cart']['firstName']) ." ". ucfirst($_SESSION['cart']['lastName'])."\n".
ucfirst($_SESSION['cart']['billingAddress1'])."\n".
ucfirst($_SESSION['cart']['billingCity'])."\n".
ucfirst($_SESSION['cart']['billingState']). " ".ucfirst($_SESSION['cart']['billingZip'])."\n".
"Phone :" .ucfirst($_SESSION['cart']['phone'])."\n\n".
"Membership Login:"."\n\n".
"URL:".$memUrl."\n\n".
"Username: " .ucfirst($_SESSION['cart']['email'])."\n\n".
"Password:".ucfirst($_SESSION['cart']['billingZip'])."\n\n".
"Payment Information:"."\n\n".
"Amount Charged :US$" . $fCharge ."\n\n".
"If you have any any questions or concerns, you can reach our customer service department by phone or e-mail:"."\n\n".
"Call ".$fNumber."(Monday - Friday 9:00 AM to 9:00 PM EST) or e-mail us at ".$fEmail."\n\n".
"Regards,"."\n".
"Customer Support"."\n".
$fName;
$headers = "From:".$fEmail."\r\n";
//if($mlist){
$headers .= 'BCC:' .$mList . "\r\n";;
//}
mail($to,$subject,$message,$headers);
}

function createUser(){
$url = 'http://members.maxdietmentor.com/api/client.php';

if(isset($_GET['cmd'])){
//delete user
        $fields = array(
                        'apiUN' => urlencode('addNutra'),
                        'apiPW' => urlencode('care-5DdP'),
                        'cmd' => urlencode('cancelUser'),
                        'uid' => urlencode('92')
        );

}else{
//add user
        $fields = array(
                'apiUN' => urlencode('addNutra'),
                'apiPW' => urlencode('care-5DdP'),
                'cmd' => urlencode('addUser'),
                'first_name' => urlencode($_SESSION['cart']['firstName']),
                'last_name' => urlencode($_SESSION['cart']['lastName']),
                'address' => urlencode($_SESSION['cart']['billingAddress1']),
                'city' => urlencode($_SESSION['cart']['billingCity']),
                'state' => urlencode($_SESSION['cart']['billingState']),
                'zip' => urlencode($_SESSION['cart']['billingZip']),
                'login' => urlencode($_SESSION['cart']['email']),
                'password' => urlencode($_SESSION['cart']['billingZip']),
                'email' => urlencode($_SESSION['cart']['email']),
                'phone' => urlencode($_SESSION['cart']['phone']),
                'site_id' => urlencode('4')
        );

}

//url-ify the data for the POST
foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
rtrim($fields_string, '&');

//open connection
$ch = curl_init();

//set the url, number of POST vars, POST data
curl_setopt($ch,CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_POST, count($fields));
curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);

//execute post
$result = curl_exec($ch);
//close connection
curl_close($ch);
}


    
?>
