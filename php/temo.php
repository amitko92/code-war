
    <html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
</head>
<body>

<?php

function solve($s) {
    
    $arr =  str_split($s);
    $numbers = array();
    $flag = false;
    $str = "";

    foreach($arr as $c){
        if($flag){
            if(is_numeric($c)){
                $str .= $c;
            }else{
                array_push($numbers, $str);
                $str = "";
                $flag = false;
            }
        }
        else{
        if(is_numeric($c))
            $str = $c;
            $flag = true;
        }
    }

    if(is_numeric($str)){
        array_push($numbers, $str);
    }
    
    return max($numbers);
}


var_dump(solve("12as345edd69"));

?>
</body>
</html>