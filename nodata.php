<?php
system("clear");
date_default_timezone_set('Africa/Johannesburg');
$date = date("h:i:a");
###################Admin Intro##################

#This bot was coded with love  by Lethal Staz

#contact on telegram @nonliving

#This was made for testing if hosts/ip's under CloudFlare are zero rated and can be used without internet connection/data.

#Anyways this is open source so can edit but know this don't act all might and high I made this...

#Special thanks to Sami and Bluewolf

#Freenet users let the hunt begin....

###################END INTRO####################


#################STAZ BANNER###################


$title="\033[0;36m[-] server \033[0;31moffline $date
\033[0;34m[FREENET BOT] \033[0;36mcreator \033[0;34mLethalStaz \033[0;37mversion \033[0;32m1.0
\033[0;36m[info] \033[0;32mfixing the script please contact admin!
\033[0;37m~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
\033[0;34m-contact on     \033[0;32m-> Telegram
\033[0;34m-my username     \033[0;32m-> @nonliving
\033[0;37m~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
\033[0;31m[!] warning  !!!
\033[0;33m[!] \033[0;35mthis is an illegal programm
\033[0;33m[!] \033[0;33mthe creator won't be responsible!\n";

$title2="\033[0;36m[-] server \033[0;32monline $date
\033[0;34m[FREENET BOT] \033[0;36mcreator \033[0;34mLethalStaz \033[0;37mversion \033[0;32m2.3
\033[0;36m[info] \033[0;32mserver online fully working enjoy hacks!
\033[0;37m~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
\033[0;34m-contact on     \033[0;32m-> Telegram
\033[0;34m-my username     \033[0;32m-> @nonliving
\033[0;37m~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
\033[0;31m[!] warning  !!!
\033[0;33m[!] \033[0;35mthis is an illegal programm
\033[0;33m[!] \033[0;33mthe creator won't be responsible!\n";


#################END BANNER##################


#################ONLINE SWITCH##################

$ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, "http://ip-api.com/json/copvps.duckdns.org");
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_HTTP_VERSION,CURL_HTTP_VERSION_1_1);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_CUSTOMREQUEST,"GET");
  curl_setopt($ch, CURLOPT_PORT,"80");
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($ch, CURLOPT_TIMEOUT, 15);
  curl_setopt($ch, CURLOPT_ENCODING, '');
  curl_setopt ($ch, CURLOPT_COOKIEJAR, "cookie.txt");
 curl_setopt ($ch, CURLOPT_COOKIEFILE, "cookie.txt");
  $headers = array();
  

$headers[] = 'Content-Type:application/json; charset=utf-8';
$headers[] = 'User-Agent:okhttp/3.12.1';
$headers[] = 'Host:ip-api.com';
$headers[] = 'Connection:Keep-Alive';
$headers[] = 'Accept-Encoding:gzip';

 
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  $result10 = curl_exec($ch);


$json = json_decode($result10,true);

if($json["org"] == "Google LLC"){
	
system("figlet Offline");
echo "$title";
echo "Use A Sim Without Data Bundles";
exit;
}else{

###################END SWITCH###################


##################STAZ HOME####################
system("clear");
echo $titil="\033[0;33m";
system("figlet Online");
echo "$title2";

}
###################END HOME####################


#################STAZ EXPLODE###################
$live = 0;
$die = 0;
ini_set('display_errors', 1);
ini_set('max_execution_time', 300000000);
$listcode = ("list.txt"); // where u put your hosts
$codelistlist = file_get_contents($listcode);
$code_list_array = file($listcode);
$code = explode(PHP_EOL, $codelistlist);
$count = count($code);
$i ="0";

echo "\033[0;36m[+]~~~~~~~~~~~~~\033[0;32mTotal Hosts/IP's=\033[0;37m[$count]\033[0;36m~~~~~~~~~~~~[+]\r\n"; //banner to display how many to be checked


//now starting the loop.....
while($i < $count) {
  $percentage = round(($i+1)/$count*100,2);
  
  
$staztrick = explode(" ", $code[$i]);//delim
  $site= trim($staztrick[0]);//in php the count start from 0 so the bot takes the first website in list.txt and trims anything else
  
 #################END EXPLODE###################
 
 
 ###################REQUEST 1###################
 $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, "https://$site");// site here
curl_setopt($ch, CURLOPT_HEADER, true);    // we want headers
curl_setopt($ch, CURLOPT_NOBODY, true);    // we don't need body
curl_setopt($ch, CURLOPT_RETURNTRANSFER,10); //return 10
#curl_setopt($ch, CURLOPT_CUSTOMREQUEST,"GET");//payload request
#curl_setopt($ch, CURLOPT_PORT,"443");//request port used
#curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);//ssl verify
curl_setopt($ch, CURLOPT_TIMEOUT, 3); // the time req must take
$output = curl_exec($ch); // output of request
$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);//code info

curl_close($ch);


################END REQUEST 1###################


##################RESPONSES#################### 

	#echo "$output\n"; //I like to keep this just to see the output when I'm fixing 
	
	
if(preg_match('/erver: cloudflare/', $output)){
echo "\033[0;36m[~]Hooray! zero rated ->  \033[0;33m$site \n";
$livee = "hits.txt";//file to be saved to
    $fopen = fopen($livee, "a+"); //auto open the file
    $fwrite = fwrite($fopen, "$site\n"); //write on the file 
    fclose($fopen); //close the file 
    $live++;
    
}else{ //This is if the host is not CloudFlare or doesn't open it will print out this text below
echo "\033[0;37m[~]Sorry not zero rated ->  \033[0;31m$site\n";
	}
	
	curl_close($ch);
$i++;

	}