<?php
// Obtém o IP do visitante
$ip = $_SERVER['REMOTE_ADDR'];

// Grava o IP em um arquivo
file_put_contents('ips.txt', $ip . PHP_EOL, FILE_APPEND);

// Redireciona para a página desejada
header("Location: obrigado.html");
exit();
?>
http://seusite.com/capture_ip.php
https://photos.app.goo.gl/xNBJecAGRhEfKcFf6