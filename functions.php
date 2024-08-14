<?php

function currentPage ($value) {
    return $_SERVER["REQUEST_URI"] === $value;
}

function authorize ($condition, $status) {
   if($condition ){
        abort($status); 
    };
 };


function dumpAndDie($value) {
echo"<pre>";
var_dump($value);
echo "</pre";
  die();
}



function base_path($path)
{
    return BASE_PATH . $path;
}