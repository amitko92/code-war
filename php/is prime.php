

    <html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
</head>
<body>

<?php

function is_prime(int $n): bool {
    $index = 2;
    while($index < $n){
        if($n % $index === 0){
            return false;
        }
    }
    return true;
}


var_dump(reverseLetter("12as345edd69"));

?>
</body>
</html>




