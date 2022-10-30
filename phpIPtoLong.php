<?php
$ip = gethostbyname("www.w3schools.com");
$out = "The following URLs are equivalent:<br>";
$out .= "https://www.w3schools.com/, https://" . $ip . "/, and https://" . sprintf("%u", ip2long($ip)) . "/";
echo $out;
?>
