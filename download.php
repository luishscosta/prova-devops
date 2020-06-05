<?php

$arquivo = $_GET['arquivo'];

header('Content-Type: application/json');
header("Content-Disposition: attachment; filename=$arquivo");
header('Pragma: no-cache');
readfile("/tmp/".$arquivo);

?>