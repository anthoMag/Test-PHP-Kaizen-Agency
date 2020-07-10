<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class DeveloperInterviewTest extends TestCase
{
    public function testFizzBuzz(): void
    {
        $this->assertEquals(
            '12Fizz4BuzzFizz78FizzBuzz11121314FizzBuzz1617Fizz19BuzzFizz2223FizzBuzz26272829FizzBuzz3132Fizz34BuzzFizz3738FizzBuzz41424344FizzBuzz4647Fizz49BuzzFizz5253FizzBuzz56575859FizzBuzz6162Fizz64BuzzFizz6768FizzBuzz71727374FizzBuzz7677Fizz79BuzzFizz8283FizzBuzz86878889FizzBuzz9192Fizz94BuzzFizz9798FizzBuzz',
            DeveloperInterview::fizzBuzz()
        );
    }

    public function testParseToRoman(): void
    {
        $this->assertEquals(
            'MMXX',
            DeveloperInterview::parseToRoman(2020)
        );

        $this->assertEquals(
            'MCMLXXXVIII',
            DeveloperInterview::parseToRoman(1988)
        );

        $this->assertEquals(
            'MMXX',
            DeveloperInterview::parseToRoman(2020)
        );

        $this->assertEquals(
            'LXXXVIII',
            DeveloperInterview::parseToRoman(88)
        );
    }

    public function testToRot13(): void
    {
        $this->assertEquals(
            'HELLO WORLD',
            DeveloperInterview::toRot13('URYYB JBEYQ')
        );

        $this->assertEquals(
            'Xnvmra Qrirybczragf',
            DeveloperInterview::toRot13('Kaizen Developments')
        );

        $this->assertEquals(
            'XNVMRA QRIRYBCZRAGF',
            DeveloperInterview::toRot13('KAIZEN DEVELOPMENTS')
        );
    }

    public function testExtractYear(): void
    {
        $this->assertEquals(
            '2019',
            DeveloperInterview::extractYear()
        );
    }

    public function testSimplifyMe(): void
    {
        // Test 1
        $mock = $this->getMockBuilder(DeveloperInterview::CLASS)
            ->setMethods(['doSomething'])
            ->getMock();

        $mock
            ->expects($this->once())
            ->method('doSomething');

        $mock->simplifyMe('doSomethingShouldBeCalled', 1);

        // Test 2
        $mock = $this->getMockBuilder(DeveloperInterview::CLASS)
            ->setMethods(['doSomething'])
            ->getMock();

        $mock
            ->expects($this->never())
            ->method('doSomething');

        $mock->simplifyMe('', 1);
    }

    public function testFactorial(): void
    {
        $this->assertEquals(
            120,
            DeveloperInterview::factorial(5)
        );
    }

    public function testClockAngle(): void
    {
        $this->assertEquals(
            190,
            DeveloperInterview::clockAngle(1, 40)
        );

        $this->assertEquals(
            75,
            DeveloperInterview::clockAngle(3, 30)
        );

        $this->assertEquals(
            313,
            DeveloperInterview::clockAngle(0, 57)
        );
    }
}
