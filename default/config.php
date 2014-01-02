<?php 

//init variables
$domain="www.nutraperfectdiet.com";
$memberurl="http://members.nutraperfectdiet.com";
$productName="NutraPerfect Diet";
$midPhone="1-855-847-8512";
$midEmail="support@nutraperfectdiet.com";
$companyName="Ballusarce Limited";
$midAddress="Karpenisiou, 9 Strovolos";
$midCity="Nicosia";
$midCountry="Cyprus";
$midZip="2012";
$midDescriptor="fitnessmaster";
$trialRate=2.95;
$rebillRate=9.84;
$downSell1=124.95 ;
$downSell2=100.95;
$downSell3=85.95 ;
$downSell4=65.95;
$downSell5=45.96;
$mailList="lenard.arreola@outlook.com,jenniferdavisferguson@gmail.com,sokke@outlook.com,susie.brown.46@gmail.com";


$billingCountry="US";

function redirectToHTTPS()
{
	//check if user on localhost - working locallly
	$whitelist = array('localhost', '127.0.0.1');
	if(in_array($_SERVER['HTTP_HOST'], $whitelist)){
	   return;
	}
	
  //redirect to secure checkout
  if($_SERVER['HTTPS']!=="on")
  {
     $redirect= "https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
     header("Location:$redirect");
  }
}

?>
