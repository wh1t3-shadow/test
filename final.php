<?php 


$url = "https://m.facebook.com/login.php";
$uid = "01632778232" ;
$pass = "01632778232" ;


$cookie = "coockes.txt";
$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, 'email='.urlencode($uid).'&pass='.urlencode($pass).'&login=Login');
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
 curl_setopt($curl, CURLOPT_HEADER, 0);
 curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
 curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_COOKIEJAR, $cookie); 
   curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Android 8.1.0; Mobile; rv:84.0) Gecko/84.0 Firefox/84.0");
curl_setopt($curl, CURLINFO_HEADER_OUT, true); 
 
  $ex = curl_exec($curl);
  

$lasturl= curl_getinfo($curl, CURLINFO_EFFECTIVE_URL);
curl_close($curl); 

 $f3 = "checkpoint";
     if(strpos($lasturl, $f3) !== false){
echo "cheakpoint"; }
else{
echo "inveled user pass" ;   
}

?>
