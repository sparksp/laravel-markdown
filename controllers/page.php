<?php

/**
 * Markdown Page Controller
 * 
 * <code>
 *     Router::register('GET /(about)', 'markdown::page@show');
 * </code>
 * 
 * @package     Bundles
 * @subpackage  Markdown
 * @author      Phill Sparks <me@phills.me.uk>
 * 
 * @see  http://github.com/sparksp/laravel-markdown
 */
class Markdown_Page_Controller extends Controller {

	/**
	 * A simple action to show the given slug.
	 * 
	 * @param  string  $name  The file name of the markdown view to show
	 * @return Markdown\View
	 */
	public function action_show($name)
	{
		return Markdown\View::make($name);
	}

}
