<?php
//
if(!function_exists('onPage')){
	//
	function onPage($name){
		//
		return request()->is($name) ? 'active' : '';
	}
}