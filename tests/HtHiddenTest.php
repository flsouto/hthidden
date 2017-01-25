<?php

use PHPUnit\Framework\TestCase;
require_once('vendor/autoload.php');

use FlSouto\HtHidden;

class HtHiddenTest extends TestCase{


	function testRender(){


		$hidden = new HtHidden("submit", "1");
		
		$this->expectOutputString('<input id="'.$hidden->id().'" name="submit" type="hidden" value="1" />');
		echo $hidden;

	}

}