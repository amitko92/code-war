<?php

    // https://www.codewars.com/kata/511f11d355fe575d2c000001/solutions/php

    function twoOldestAges($ages) {
        rsort($ages);
        return array($ages[1], $ages[0]);
    }


?>


