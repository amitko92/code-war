
    <html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
</head>
<body>

<?php

//  https://www.codewars.com/kata/58b8c94b7df3f116eb00005b/train/php

function is_char($c){
    if($c >= 'a' && $c <= 'z'){
        return true;
    }
    else{
        return false;
    }
}

function reverseLetter($str){
    $arr = str_split($str);
    $filtered_str = "";
    
    $new_arr = array_filter($arr, 'is_char');

    return implode('', array_reverse($new_arr));
}


var_dump(reverseLetter("12as345edd69"));

?>
</body>
</html>


