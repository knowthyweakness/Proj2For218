<?php
/**
 * Created by PhpStorm.
 * User: thoss
 * Date: 5/1/2019
 * Time: 10:55 PM
 */

declare(strict_types=1);
use PHPUnit\Framework\TestCase;
final class csvTest extends TestCase
{

    public function testOpenCSV(): void
    {
        $this->assertTrue(
            method_exists(CSV::class, 'openCSV')
        );
    }
    public function testCreateArray(): void
    {
        $this->assertTrue(
            method_exists(CSV::class, 'createArray')
        );
    }
    public function testPrintArray(): void
    {
        $this->assertTrue(
            method_exists(CSV::class, 'printArray')
        );
    }
    public function testGetArray(): void
    {
        $this->assertTrue(
            method_exists(html::class, 'getArray')
        );
    }
    public function testMakeTable(): void
    {
        $this->assertTrue(
            method_exists(html::class, 'makeTable')
        );
    }
}