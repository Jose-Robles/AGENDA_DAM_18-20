<?php
require_once 'Parsedown.php';
$Parsedown = new Parsedown();
echo $Parsedown->text('Hello _Parsedown_!');
echo $Parsedown->line('Hello _Parsedown_!');