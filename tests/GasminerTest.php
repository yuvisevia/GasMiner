<?php
/**
 * Tests for GasMiner
 */

use PHPUnit\Framework\TestCase;
use Gasminer\Gasminer;

class GasminerTest extends TestCase {
    private Gasminer $instance;

    protected function setUp(): void {
        $this->instance = new Gasminer(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Gasminer::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
