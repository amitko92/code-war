<?php
    // https://www.codewars.com/kata/578553c3a1b8d5c40300037c/solutions/php

    function binaryArrayToNumber($arr) {
        
        $num = "";
        foreach($arr as $d){
            $num .= $d;
        }
        return bindec($num);
    }




?>