<?php

declare(strict_types=1);

final class DeveloperInterview
{
    /**
     * Write a short program that prints each number from 1 to 100 on a new line. 
     * 
     * For each multiple of 3, print "Fizz" instead of the number. 
     * 
     * For each multiple of 5, print "Buzz" instead of the number. 
     * 
     * For numbers which are multiples of both 3 and 5, print "FizzBuzz"
     * instead of the number.
     * 
     * @return string
     */
    public static function fizzBuzz(): string
    {
        $fizzBuzz = '';

        // Write your code!

        return $fizzBuzz;
    }

    /**
     * For a given number, will return its value in Roman numerals.
     *
     * Roman Numerals Chart
     * 
     * Roman Numeral | Number Value | Use As Inputs
     * --------------|--------------|---------------
     * I             | 1            | I
     * V             | 5            | V
     * X             | 10           | X
     * L             | 50           | L
     * C             | 100          | C
     * D             | 500          | D
     * M             | 1,000        | M
     * 
     * @param int $value An integer between 0 and 3999
     * 
     * @return string The roman number equivalent
     */
    public static function parseToRoman(int $value): string
    {
        $roman = '';

        // Write your code!

        return $roman;
    }

    /**
     * ROT-13 is the encrypting of a message by exchanging each of the
     * letters on the first half of the alphabet with the corresponding
     * letter in the second half of the alphabet (that is, swapping
     * positions by 13 characters). Thus, A becomes N, B becomes O,
     * and so forth, and conversely, N becomes A, O becomes B, and so
     * forth. Numbers, spaces and punctuation are not changed.
     *
     * Using the native `str_rot13` is forbiden, make your own implementation!
     * 
     * @param string $value The string to decode
     * 
     * @return string The decoded string
     */
    public static function toRot13(string $value): string
    {
        $rot13 = '';

        // Write your code!

        return $rot13;
    }
}
