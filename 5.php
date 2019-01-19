<?php
function count_handsake($x){
    $awal = 0;
    for ($i=0; $i<$x; $i++) {
        $awal+=$i;
    }
    echo $awal;
}
count_handsake(6);

?>