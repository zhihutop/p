<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$autoload['packages'] = array();
$autoload['libraries'] = array('database','session');
$autoload['helper'] = array('url' ,'file','common','cookie','array');
$autoload['config'] = array();
$autoload['language'] = array();
$autoload['model'] = array('mysql_model','common_model','data_model','excel_model');
