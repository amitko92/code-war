<?php

    function breakChocolate ($n, $m) {

        if($n === 1 && $m === 1){
            return 0;
        }

        if($m > 1){
            return breakChocolate($n, 1) + breakChocolate($n, $m -1) + 1;
        }

        if($n > 1){
            return breakChocolate(1, $m) + breakChocolate($n - 1, $m) + 1;
        }
    
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

echo breakChocolate(5,5);

    
?>
</body>
</html>
