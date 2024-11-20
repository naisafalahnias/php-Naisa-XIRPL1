<?php

$i = 1;
while($i < 10){
    for($j = 0; $j < 2; $j++){
        echo "Ini perulangan ke ($i, $j)<br>";
    }

    $i++;
}

echo "<hr>";

for($i = 10; $i >= 1; $i-- ){
    echo "<h3>Ini perulangan ke $i</h3>";
}

?>