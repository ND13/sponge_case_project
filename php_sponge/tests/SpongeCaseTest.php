<?php
declare(strict_types=1);

require __DIR__ . "/../src/SpongeCase.php";

use PHPUnit\Framework\TestCase;

final class SpongeCaseTest extends TestCase
{
    public function testOutput(): void
    {
        $testOut = 'hElLo wOrLd';
        $this->assertEquals($testOut, spongify('hello world'));
        $this->assertEquals($testOut, spongify(' hello  world'));
        $this->assertEquals($testOut, spongify('_hello_world'));
        $this->assertEquals($testOut, spongify('123456789'));
    }
}