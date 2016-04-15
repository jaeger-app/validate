<?php
/**
 * Jaeger
 *
 * @author		Eric Lamb <eric@mithra62.com>
 * @copyright	Copyright (c) 2015-2016, mithra62, Eric Lamb
 * @link		http://jaeger-app.com
 * @version		1.0
 * @filesource 	./tests/ValidateTest.php
 */
namespace JaegerApp\tests;

use JaegerApp\Validate;

/**
 * mithra62 - Valiate object Unit Tests
 *
 * Contains all the unit tests for the \mithra62\Valiate object
 *
 * @package mithra62\Tests
 * @author Eric Lamb <eric@mithra62.com>
 */
class ValidateTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Tests the base Validate object state
     */
    public function testInit()
    {
        $val = new Validate();
        $this->assertInstanceOf('\Valitron\Validator', $val);
    }

    /**
     * Test that we have all the custom rules we need loaded up
     */
    public function testCustomRules()
    {
        $val = new Validate();
        $rules = $val->getCustomRules();
        $this->assertArrayHasKey('dir', $rules);
        $this->assertArrayHasKey('file', $rules);
        $this->assertArrayHasKey('readable', $rules);
        $this->assertArrayHasKey('writable', $rules);
        $this->assertArrayHasKey('ftp_connect', $rules);
        $this->assertArrayHasKey('ftp_writable', $rules);
        $this->assertArrayHasKey('s3_bucket_exists', $rules);
        $this->assertArrayHasKey('s3_bucket_readable', $rules);
        $this->assertArrayHasKey('s3_connect', $rules);
        $this->assertArrayHasKey('s3_bucket_writable', $rules);
    }
}