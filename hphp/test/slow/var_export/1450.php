<?php


// disable array -> "Array" conversion notice
<<__EntryPoint>>
function main_1450() {
error_reporting(error_reporting() & ~E_NOTICE);

var_export(array("\0" => 1));
var_export(array("\0" => "\0"));
var_export(array("\0" => "\\"));
var_export(array("\0" => "\'"));
var_export(array("\\" => 1));
var_export(array("\\" => "\0"));
var_export(array("\\" => "\\"));
var_export(array("\\" => "\'"));
var_export(array("\'" => 1));
var_export(array("\'" => "\0"));
var_export(array("\'" => "\\"));
var_export(array("\'" => "\'"));
var_export(array("\a" => "\a"));
var_export(!array("\0" => "\0"));
var_export((array("\0" => "\0")));
var_export((int)array("\0" => "\0"));
var_export((integer)array("\0" => "\0"));
var_export((bool)array("\0" => "\0"));
var_export((boolean)array("\0" => "\0"));
var_export((float)array("\0" => "\0"));
var_export((double)array("\0" => "\0"));
var_export((real)array("\0" => "\0"));
var_export((string)array("\0" => "\0"));
$a = "0x10";
var_export($a);
var_export("\0");
$a = array("\0" => 1);
var_export($a);
$a = array("\0" => "\0");
var_export($a);
$a = array("\0" => "\\");
var_export($a);
$a = array("\0" => "\'");
var_export($a);
$a = array("\\" => 1);
var_export($a);
$a = array("\\" => "\0");
var_export($a);
$a = array("\\" => "\\");
var_export($a);
$a = array("\\" => "\'");
var_export($a);
$a = array("\'" => 1);
var_export($a);
$a = array("\'" => "\0");
var_export($a);
$a = array("\'" => "\\");
var_export($a);
$a = array("\'" => "\'");
var_export($a);
$a = array("\a" => "\a");
var_export($a);
}
