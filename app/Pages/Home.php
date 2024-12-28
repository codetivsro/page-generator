<?php

namespace App\Pages;

use Codetiv\Http\Page;
use Codetiv\Http\Response\View;

class Home
{

	#[Page('/')]
	public function __invoke(): View
	{
		return new View('pages.home', ['text' => 'Hello World']);
	}
}