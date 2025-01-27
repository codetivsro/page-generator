<?php

namespace App\Sites\Default;

use Codetiv\Http\Page;
use Codetiv\Http\Response\View;

class Home
{

	#[Page('/')]
	public function __invoke(): View
	{
		return new View('default.home', ['text' => 'Hello World!']);
	}
}