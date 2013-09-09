<?php

namespace PPR;

class PrePrintR
{
    public function pprint_r($var, $exit=false)
    {
        echo "<pre>".print_r($var, true)."</pre>";
        if($exit){
            exit;
        }
    }
}
