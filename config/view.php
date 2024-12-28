<?php

return new \Codetiv\View\Renderers\LatteRenderer(
	viewPath: __DIR__ . '/../resources/templates',
	latte: new \Latte\Engine(),
);