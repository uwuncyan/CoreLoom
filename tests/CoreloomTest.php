<?php
/**
 * Tests for CoreLoom
 */

use PHPUnit\Framework\TestCase;
use Coreloom\Coreloom;

class CoreloomTest extends TestCase {
    private Coreloom $instance;

    protected function setUp(): void {
        $this->instance = new Coreloom(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Coreloom::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
