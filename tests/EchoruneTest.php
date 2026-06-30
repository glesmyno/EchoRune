<?php
/**
 * Tests for EchoRune
 */

use PHPUnit\Framework\TestCase;
use Echorune\Echorune;

class EchoruneTest extends TestCase {
    private Echorune $instance;

    protected function setUp(): void {
        $this->instance = new Echorune(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Echorune::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
