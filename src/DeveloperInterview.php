<?php

declare(strict_types=1);

class DeveloperInterview
{
    /**
     * Write a short program that concats each number from 1 to 100.
     *
     * For each multiple of 3, concat "Fizz" instead of the number.
     *
     * For each multiple of 5, concat "Buzz" instead of the number.
     *
     * For numbers which are multiples of both 3 and 5, concat "FizzBuzz"
     * instead of the number.
     *
     * @return string
     */
    public static function fizzBuzz(): string
    {
        $fizzBuzz = '';

        for ($i = 1; $i <= 100; $i++) {
            
            $fizzBuzz .= match(true) {
                (($i % 3 == 0) && ($i % 5 == 0)) => "FizzBuzz",
                ($i % 3 == 0) => "Fizz",
                ($i % 5 == 0) => "Buzz",
                default => $i
            };
        }
            
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

        $letters = [
            'M' => 1000,
            'CM' => 900,
            'D' => 500,
            'CD' => 400,
            'C' => 100,
            'XC' => 90,
            'L' => 50,
            'XL' => 40,
            'X' => 10,
            'IX' => 9,
            'V' => 5,
            'IV' => 4,
            'I' => 1,
        ];

        foreach ($letters as $letter => $multiple) {
            $numberOfMultiple = (int)($value / $multiple);

            if ($numberOfMultiple === 0) {
                continue;
            }

            $roman .= str_repeat($letter, $numberOfMultiple);

            $value %= $multiple;

            if ($value === 0) {
                break;
            }
        }

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

        $letters = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];

        $firstPart = array_slice($letters, 0, count($letters) / 2);
        $lastPart = array_slice($letters, count($letters) / 2);

        $mapping = [];

        foreach ($firstPart as $key => $letter) {
            $mapping[$letter] = $lastPart[$key];
            $mapping[$lastPart[$key]] = $letter;

            $mapping[strtolower($letter)] = strtolower($lastPart[$key]);
            $mapping[strtolower($lastPart[$key])] = strtolower($letter);
        }

        foreach (str_split($value) as $letter) {
            $rot13 .= $mapping[$letter] ?? $letter;
        }

        return $rot13;
    }

    /**
     * Write a regular expression that extracts the year from the $text
     * variable
     *
     * @return string the year
     */
    public static function extractYear(): string
    {
        $text = 'Rapport n°2187 (09/2019) - Achats';
        $year = '';

        $regex = '/\/(\d{4})\)/';
        preg_match($regex, $text, $output);
        $year = $output[1];

        return $year;
    }

    public function doSomething()
    {
    }

    /**
     * Ouch, this code is ugly. Can you improve it?
     *
     * @return boolean
     */
    public function simplifyMe($report, $rc)
    {
        if ($report === '' && $rc === 1) {
            return;
        }

        $this->doSomething();
    }

    /**
     * Get the factorial of a number
     *
     * @param int $number
     *
     * @return int
     */
    public static function factorial(int $number): int
    {
        $factorial = 1;

        for ($i=2; $i <= $number; $i++) { 
            $factorial = $factorial * $i;
        }        

        return $factorial;
    }

    /**
     * Get the angle formed by the hours and the minutes hands
     *
     * @param int $hours
     * @param int $minutes
     *
     * @return int
     */
    public static function clockAngle(int $hours, int $minutes): int
    {
        $angle = 0;

        $hoursInMinutes = $hours * 60 + $minutes;

        $hoursNeedle = $hoursInMinutes * 360 / 720;
        $minutesNeedle = $minutes * 360 / 60;

        $angle = $minutesNeedle - $hoursNeedle;        

        return (int)$angle;
    }
}