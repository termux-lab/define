<?php
$file = fopen("data.txt", "w+");
fwrite($file, "");
fclose($file);

echo "DEFINE";
echo "https://vk.com/termuxlab | termux - Lab";
system("php -S 127.0.0.1:666");
?>
