<?php

namespace App\Services;

/**
 * MathService is a class that provides basic mathematical operations such as
 * addition, subtraction, multiplication, division, and other common mathematical functions.
 */
class MathService
{
    /**
     * Add two numbers.
     *
     * @param float $a First number.
     * @param float $b Second number.
     * @return float The sum of the two numbers.
     */
    public static function add(float $a, float $b): float
    {
        return $a + $b;
    }

    /**
     * Subtract two numbers.
     *
     * @param float $a First number.
     * @param float $b Second number.
     * @return float The difference between the two numbers.
     */
    public static function subtract(float $a, float $b): float
    {
        return $a - $b;
    }

    /**
     * Multiply two numbers.
     *
     * @param float $a First number.
     * @param float $b Second number.
     * @return float The product of the two numbers.
     */
    public static function multiply(float $a, float $b): float
    {
        return $a * $b;
    }

    /**
     * Divide two numbers.
     *
     * @param float $a First number.
     * @param float $b Second number.
     * @return float The quotient of the division.
     * @throws \InvalidArgumentException If division by zero is attempted.
     */
    public static function divide(float $a, float $b): float
    {
        if ($b === 0.0) {
            throw new \InvalidArgumentException('Division by zero is not allowed.');
        }

        return $a / $b;
    }

    /**
     * Calculate the sine of a number.
     *
     * @param float $a The number (in radians).
     * @return float The sine of the given number.
     */
    public static function sin(float $a): float
    {
        return sin($a);
    }

    /**
     * Calculate the cosine of a number.
     *
     * @param float $a The number (in radians).
     * @return float The cosine of the given number.
     */
    public static function cos(float $a): float
    {
        return cos($a);
    }

    /**
     * Get the value of Pi (π).
     *
     * @return float The value of Pi.
     */
    public static function pi(): float
    {
        return pi();
    }

    /**
     * Calculate the square root of a number.
     *
     * @param float $a The number.
     * @return float The square root of the given number.
     */
    public static function sqrt(float $a): float
    {
        if ($a < 0) {
            throw new \InvalidArgumentException('Square root of a negative number is not allowed.');
        }

        return sqrt($a);
    }

    /**
     * Calculate the power of a number.
     *
     * @param float $a The base number.
     * @param float $b The exponent.
     * @return float The result of raising $a to the power of $b.
     */
    public static function pow(float $a, float $b): float
    {
        return pow($a, $b);
    }
}
