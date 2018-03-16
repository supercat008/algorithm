<?php
/**
 * Created by PhpStorm.
 * User: JeffHuang
 * Date: 2018/3/16
 * Time: 15:44
 */

namespace Fun\Algorithm;
use Fun\Algorithm\Tools;

class Sort{

	/**
	 * @desc 选择排序
	 * @param $data
	 */
	public function selectionSort(&$data){
		$count = count($data);
		for($i=0; $i<$count; $i++){
			$minIndex = $i;
			for($j = $i+1; $j<$count; $j++){
				if($data[$j] < $data[$minIndex]){
					//依次向后比较，若大于后者则交换值，但key（即位置）保持不动
					Tools::Swap($data[$j], $data[$minIndex]);
				}
			}
		}
	}

}
