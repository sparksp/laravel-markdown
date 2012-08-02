<?php

Autoloader::map(array(
	'Sparkdown\\Markdown' => __DIR__.DS.'parser'.EXT,
));

define('MD_EXT', '.md');

View::$extensions[] = MD_EXT;

Event::listen(View::engine, function($view)
{
	if ( ! str_contains($view->path, MD_EXT))
	{
		return;
	}	

	$compiled = path('storage').'views/'.md5($view->path);

	if ( ! file_exists($compiled) or filemtime($view->path) > filemtime($compiled))
	{
		$text = file_get_contents($view->path);
		$html = \Sparkdown\Markdown($text);
		file_put_contents($compiled, $html);
	}

	$view->path = $compiled;

	return $view->get();
});
