 <?php
    function printPattern($n) {
        for ($i = 0; $i <= $n; $i++) {
            for ($j = 0; $j <= $i; $j++) {
                echo $i; 
            }
            echo "<br>";  
        }
    }
  printPattern(4);
?>
 
<!-- 
0 
11 
222 
3333 
44444 
-->