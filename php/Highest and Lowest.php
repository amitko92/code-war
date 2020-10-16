<?php
    // https://www.codewars.com/kata/554b4ac871d6813a03000035

    function highAndLow($numbers)
    {
        $arr = explode(" ",$numbers);
        $min = $arr[0];
        $max = $arr[0];
        
        foreach($arr as $num){
            $min = min($min, $num);
            $max = max($max, $num);
        }

        return $max . " " . $min;
    }


?>
    <html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
</head>
<body>

<?php

echo highAndLow("1 9 90 0 -2 5");


    
?>
</body>
</html>