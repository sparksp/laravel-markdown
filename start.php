<?php

/**
 * Markdown for Laravel
 * 
 * A simple bundle to provide Markdown functions.
 * 
 * <code>
 *     echo Markdown($text);
 * </code>
 * 
 * @package     Bundles
 * @subpackage  Markdown
 * @author      Phill Sparks <me@phills.me.uk>
 * 
 * @see  http://github.com/sparksp/laravel-markdown
 * @see  http://michelf.com/projects/php-markdown/
 */


// Config options for Markdown
define('MARKDOWN_EMPTY_ELEMENT_SUFFIX', '>');
define('MARKDOWN_PARSER_CLASS', 'Markdown\\MarkdownLaravel_Parser');

// Map the Markdown classes
Autoloader::map(array(
	'Markdown\\View' => __DIR__.DIRECTORY_SEPARATOR.'view'.EXT,
	'Markdown_Page_Controller' => __DIR__.DIRECTORY_SEPARATOR.'controllers'.DIRECTORY_SEPARATOR.'page'.EXT,
));

// It's safe to assume that if you've started the bundle you're
// going to want to use the parser.
require __DIR__.DIRECTORY_SEPARATOR."parser.php";
