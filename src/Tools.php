<?php
/**
 * Created by PhpStorm.
 * User: JeffHuang
 * Date: 2018/3/16
 * Time: 15:55
 */

namespace Fun\Algorithm;

class Tools{

	public static function Generate($count, $start, $end)
	{
		$data = array();
		for ($i = 0; $i < $count; $i++) {
			$data[$i] = rand($start, $end);
		}
		return $data;
	}
	public static function Swap(&$a, &$b){
		list($a, $b) = array($b, $a);
	}
}