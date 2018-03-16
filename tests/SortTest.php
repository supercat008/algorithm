<?php
/**
 * Created by PhpStorm.
 * User: JeffHuang
 * Date: 2018/3/16
 * Time: 15:54
 */

require dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

use Fun\Algorithm\Tools;
use Fun\Algorithm\Sort;
$sortObj = new Sort();

//测试选择排序
$arr = Tools::Generate(10, 1, 1000);
var_dump($arr);
$sortObj->selectionSort($arr);
var_dump($arr);
