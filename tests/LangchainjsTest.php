<?php
/**
 * Tests for LangChainJS
 */

use PHPUnit\Framework\TestCase;
use Langchainjs\Langchainjs;

class LangchainjsTest extends TestCase {
    private Langchainjs $instance;

    protected function setUp(): void {
        $this->instance = new Langchainjs(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Langchainjs::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
