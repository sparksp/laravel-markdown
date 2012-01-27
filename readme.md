# Markdown for Laravel

A simple bundle to provide [Markdown](http://daringfireball.net/projects/markdown/) and [Markdown Extra](http://michelf.com/projects/php-markdown/) functions.

Links and image URLs are passed through Laravel\URL::to and Larave\URL::to_asset.

## Installation

Drop the **Markdown** bundle into your **/bundles** directory.

## Parse some text

Just start using Markdown\Markdown

    echo Markdown\Markdown($text);

## View a markdown file

You can create Markdown\View objects, like Laravel\View objects

	Router::register('GET /about', function()
	{
		// View of application/views/about.md
		return Markdown\View::make('about');

		// Also supports bundles and paths...
		// View of bundles/bundle/views/path/file.md
		return Markdown\View::make('bundle::path.file');
	});

And you can route to the handy controller (needs 1 parameter).

	Router::register('GET /(about)', 'markdown::page@show');
