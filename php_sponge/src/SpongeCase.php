<?php
declare (strict_types = 1);

function spongify(string $input): string
{
    $input = strtolower($input);
    $charIndex = 0;
    $output = '';
    $acceptedCharacters = range('a', 'z');

    foreach (str_split($input) as $char) {
        if ($char != ' ') {
            if ($charIndex % 2 == 1 && in_array($char, $acceptedCharacters)) {
                $output .= strtoupper($char);
                $charIndex++;
            } else if ($charIndex % 2 == 0 && in_array($char, $acceptedCharacters)) {
                $output .= strtolower($char);
                $charIndex++;
            } else {
                $output .= $char;
            }
        } else {
            $output .= ' ';
            $charIndex = 0;
        }
    }

    return $output;
}