<?php
declare (strict_types = 1);

function spongify(string $input): string
{
    $charIndex = 0;
    $output = '';

    foreach (str_split($input) as $char) {
        if ($char != ' ') {
            if ($charIndex % 2 == 1) {
                $output .= strtoupper($char);
                $charIndex++;
            } else if ($charIndex % 2 == 0) {
                $output .= strtolower($char);
                $charIndex++;
            }
        } else {
            $output .= ' ';
            $charIndex = 0;
        }
    }

    return $output;
}