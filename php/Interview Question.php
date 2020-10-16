<?php
    // https://www.codewars.com/kata/5b358a1e228d316283001892

    function get_strings($city) {
        $city = strtolower($city);
        $city = str_replace(' ', '', $city);  
        $map = array();
        $final_str = "";
        for($i = 0; $i < strlen($city); $i++){
        
            if(array_key_exists($city[$i], $map)){
                $map[$city[$i]] .= '*';
            }else{
                $map[$city[$i]] = '*';
            }

        }
        
        foreach ($map as $k => $v) {
            $final_str .= $k.":".$v.",";
        }
        
        return substr($final_str, 0, strlen($final_str) - 1);
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

echo get_strings("faran");


    
?>
</body>
</html>