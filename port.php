 <?php

echo "_ __   ___  _ __| |_    ___| |__   ___  ___| | __\n";
echo "|  _ \ / _ \|  __| __|  / __| '_ \ / _ \/ __| |/ /\n";
echo "| |_) | (_) | |  | |_  | (__| | | |  __/ (__|   <\n";
echo "|  __/ \___/|_|   \__|  \___|_| |_|\___|\___|_|\_\n";
echo "|_|Coded by Syahrul R.\n";
echo "--------------------------------------------------\n";
echo "Support by :\n";
echo "- LaughSec\n";
echo "- Banyumas Source\n";
echo "--------------------------------------------------\n\n";

echo "Input target : ";
$url = trim(fgets(STDIN));
$port = 80;

$data = 'remoteAddress='.$url.'&portnumber='.$port;

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://ports.yougetsignal.com/check-port.php');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$x = curl_exec($ch);

if (preg_match('/open/', $x)) {
   echo "\n\n(+) Port the $url = $port is open\n\n";
}
else {
   echo "\n\n(-) Port the $url is close\n\n";
}
?>
