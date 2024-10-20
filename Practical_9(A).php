<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Php pattern</title>
  </head>
  <body>
    <div>
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
    </div>
  </body>
</html>
