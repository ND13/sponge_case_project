<?php
declare (strict_types = 1);

require __DIR__ . "/../src/SpongeCase.php";

use PHPUnit\Framework\TestCase;

final class SpongeCaseTest extends TestCase
{
    public function testOutput(): void
    {
        $this->assertEquals('hElLo wOrLd', spongify('hello world'));
        $this->assertEquals(' hElLo  wOrLd', spongify(' hello  world'));
        $this->assertEquals('hElLo wOrLd ', spongify('hello world '));
        $this->assertEquals('hElLo 123456789_$', spongify('hello 123456789_$'));
    }
}
