<?php
/**
 * Jaeger
 *
 * @copyright	Copyright (c) 2015-2016, mithra62
 * @link		http://jaeger-app.com
 * @version		1.0
 * @filesource 	./Validate/Filesystem/Dir.php
 */
namespace JaegerApp\Validate\Rules\Filesystem;

use JaegerApp\Validate\AbstractRule;

if (! class_exists('\\JaegerApp\\Validate\\Rules\\Filesystem\\Dir')) {

    /**
     * Jaeger - Directory Validation Rule
     *
     * Validates that a given input is a directory
     *
     * @package Validate\Rules\Filesystem
     * @author Eric Lamb <eric@mithra62.com>
     */
    class Dir extends AbstractRule
    {

        /**
         * The Rule shortname
         * 
         * @var string
         */
        protected $name = 'dir';

        /**
         * The error template
         * 
         * @var string
         */
        protected $error_message = '{field} has to be a directory';

        /**
         * (non-PHPdoc)
         * 
         * @see \mithra62\Validate\RuleInterface::validate()
         * @ignore
         *
         */
        public function validate($field, $input, array $params = array())
        {
            if ($input instanceof \SplFileInfo) {
                return $input->isDir();
            }
            
            return (is_string($input) && is_dir($input));
        }
    }
}