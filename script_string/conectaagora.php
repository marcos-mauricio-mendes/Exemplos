<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 09/01/2015
 * Time: 16:13
 */


function getXmlHttp($hostname, $port, $timeout, $filepath="", $getData="", $postData="", $userAgent="", $bytes=1024){

    $fp = fsockopen($hostname, $port, $errno, $errstr, $timeout);
    if (!$fp) {
        fclose($fp); return "$errstr ($errno)<br />\n";
    } else { (strlen($postData)>0)? $method="POST" : $method="GET" ;
        fwrite($fp, "$method $filepath$getData HTTP/1.1\r\n");
        fwrite($fp, "Host: $hostname\r\n");

        if(strlen($postData)>0) {

            fwrite($fp, "Content-Type: application/x-www-form-urlencoded\r\n");
            fwrite($fp, "Content-Length: ".strlen($postData)."\r\n"); }

        if(strlen($userAgent)>0) fwrite($fp, "User-agent: $userAgent\r\n");

        fwrite($fp, "Connection: close\r\n\r\n");
        fwrite($fp, $postData); $txt=""; while (!feof($fp)) {

            $txt .= fgets($fp, $bytes); } fclose($fp); return $txt; }

}



$GLOBALS = {
$hostname="www.google.com.br";
$port=80;
$timeout=30;
$filepath="/";
$txt = get($hostname,$port,$timeout,$filepath);
$pos = strrpos($txt, "close\r\n\r\n")+strlen("close\r\n\r\n");
$txt = substr($txt,$pos,strlen($txt));
}
echo $txt;
