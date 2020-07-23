<?php

$logger1  = $_GET.PHP_EOL;
$logger2  = $_GET.PHP_EOL;
file_put_contents('./log_1_'.date("j.n.Y").'.log', $logger1, FILE_APPEND);
file_put_contents('./log_2_'.date("j.n.Y").'.log', $logger2, FILE_APPEND);

