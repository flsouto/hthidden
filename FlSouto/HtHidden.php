<?php

namespace FlSouto;

class HtHidden extends HtField{
	
	function __construct($name, $value=null){
		parent::__construct($name);
		if(!is_null($value)){
			$this->param->fallback($value);
		}

	}

	function render(){
		$this->attrs(['type'=>'hidden','value'=>$this->value()]);
		echo "<input {$this->attrs} />";
	}

}