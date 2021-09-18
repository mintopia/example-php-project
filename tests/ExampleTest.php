<?php

declare(strict_types=1);

namespace Mintopia\Example\Tests;

use Mintopia\Example\Widget;
use PHPUnit\Framework\TestCase;

final class ExampleTest extends TestCase
{
    public function testThisTestAlwaysPasses(): void
    {
        $this->assertTrue(true);
    }

    public function testWidgetNameIsSetCorrectly(): void
    {
        $widget = new Widget('testing');
        $this->assertEquals('testing', $widget->name);
    }
}
