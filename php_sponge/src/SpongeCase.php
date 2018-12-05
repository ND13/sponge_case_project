<?php
declare(strict_types=1);

function spongify(string $input): string {
    $userInput = $_SERVER['argv'][2];
    $charIndex = 0;
    $output = '';

    foreach (str_split($userInput) as $char) {
        if ($char != ' ') {
            if ($charIndex % 2 == 1) {
                $output .= strtoupper($char);
            } else if ($charIndex % 2 == 0) {
                $output .= strtolower($char);
            }
        } else {
            $output .= ' ';
        }
        $charIndex++;
    }

    return $output;
}