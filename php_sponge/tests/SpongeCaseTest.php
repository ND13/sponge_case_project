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
        $this->assertEquals('hElLo 123456789_$wOrLd', spongify('hello 123456789_$world'));
        $this->assertEquals('hElLo 1wOrLd hA4hA', spongify('hello 1world ha4ha'));
    }
}
