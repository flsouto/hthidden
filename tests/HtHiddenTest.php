<?php

use PHPUnit\Framework\TestCase;

#mdx:h autoload
require_once('vendor/autoload.php');

#mdx:h use
use FlSouto\HtHidden;

/* 
# HtHidden

Generates hidden html input tags.

## Installation

Use composer:

```
composer require flsouto/hthidden
```

**Notice:** this library relies on the HtField class. The inherited functionality will not be covered here. Read [this documentation](https://github.com/flsouto/htfield) if you want to learn more about it.

## Usage

The example below creates a hidden input named "submit" with a value of "1":

#mdx:render

Output:
#mdx:render -o

Wow!! This is some rocket science!! 

*/

class HtHiddenTest extends TestCase{


	function testRender(){

		#mdx:render
		$hidden = new HtHidden("submit", "1");
		#/mdx echo $hidden

		$this->expectOutputString('<input id="'.$hidden->id().'" name="submit" type="hidden" value="1" />');
		echo $hidden;

	}

}