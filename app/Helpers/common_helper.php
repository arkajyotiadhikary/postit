<?php

/*pretty print the content with die*/
function prd($var){
    // header("Content-type:application/json");
    // exit(json_encode($var, JSON_PRETTY_PRINT));
    ?><pre><?php print_r($var);?></pre><?php die;
}
/*pretty print the content*/
function pr($var){
    ?><pre><?php print_r($var);?></pre><?php
}