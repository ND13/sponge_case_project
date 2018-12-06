<?php
require __DIR__ . '/src/SpongeCase.php';

if ($argc > 1 && $argv[1] != '') 
    echo spongify($argv[1]);
else 
    echo "No input text entered. Usage: php main.php \"text to spongify\"";