<!-- https://www.codewars.com/kata/526233aefd4764272800036f -->

<!DOCTYPE html>
<html>
<body>

<?php
    function matrix_addition(array $a, array $b): array {
    	for($i = 0; $i < count($a[0]); $i++){
          for($j = 0; $j < count($a[0]); $j++){
        		$a[$i][$j] += $b[$i][$j];
        	}
        }
        return $a;
	}
?>

</body>
</html>