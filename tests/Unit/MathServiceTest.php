<?php

namespace Tests\Unit;

use App\Services\MathService;

test('it adds two numbers', function () {
    $result = MathService::add(5, 3);
    expect($result)->toBe(8.0);
});

test('it subtracts two numbers', function () {
    $result = MathService::subtract(5, 3);
    expect($result)->toBe(2.0);
});

test('it multiplies two numbers', function () {
    $result = MathService::multiply(5, 3);
    expect($result)->toBe(15.0);
});

test('it divides two numbers', function () {
    $result = MathService::divide(6, 3);
    expect($result)->toBe(2.0);
});

test('it throws an exception when dividing by zero', function () {
    expect(fn () => MathService::divide(6, 0))->toThrow(\InvalidArgumentException::class);
});

test('it calculates the sine of a number', function () {
    $result = MathService::sin(pi() / 2);  // sin(π/2) should be 1
    expect($result)->toBe(1.0);
});

test('it calculates the cosine of a number', function () {
    $result = MathService::cos(0);  // cos(0) should be 1
    expect($result)->toBe(1.0);
});

test('it returns the value of pi', function () {
    $result = MathService::pi();
    expect($result)->toBe(pi());
});

test('it calculates the square root of a number', function () {
    $result = MathService::sqrt(16);
    expect($result)->toBe(4.0);
});

test('it throws an exception when calculating the square root of a negative number', function () {
    expect(fn () => MathService::sqrt(-4))->toThrow(\InvalidArgumentException::class);
});

test('it calculates the power of a number', function () {
    $result = MathService::pow(2, 3);  // 2^3 should be 8
    expect($result)->toBe(8.0);
});
