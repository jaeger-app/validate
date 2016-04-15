<?php
/**
 * Jaeger
 *
 * @copyright	Copyright (c) 2015-2016, mithra62
 * @link		http://jaeger-app.com
 * @version		1.0
 * @filesource 	./Validate/Filesystem/DirEmpty.php
 */
namespace JaegerApp\Validate\Rules\Filesystem;

use JaegerApp\Validate\AbstractRule;
if (! class_exists('\\JaegerApp\\Validate\\Rules\\Filesystem\\DirEmpty')) {

    /**
     * Jaeger - Empty Directory Validation Rule
     *
     * Validates that a given input is an empty directory
     *
     * @package Validate\Rules\Filesystem
     * @author Eric Lamb <eric@mithra62.com>
     */
    class DirEmpty extends AbstractRule
    {

        /**
         * The Rule shortname
         * 
         * @var string
         */
        protected $name = 'dir_empty';

        /**
         * The error template
         * 
         * @var string
         */
        protected $error_message = '{field} has to be an empty directory';

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
                if ($input->isDir()) {
                    $input = $input->getBasename();
                } else {
                    return false;
                }
            } else {
                if (! is_dir($input)) {
                    return false;
                }
            }
            
            $d = dir($input);
            while (false !== ($entry = $d->read())) {
                if ($entry != '.' && $entry != '..') {
                    return false;
                }
            }
            
            return true;
        }
    }
}