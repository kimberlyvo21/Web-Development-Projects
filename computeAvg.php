<?php




function compAvg ($p1, $p2, $p3, $p4, $p5, $p6, $drop){
    $p1 = ($p1 /30) *100;
    $p5 = ($p5 /50) *100;

    $total = [];
    $total[] = $p1;
    $total[] = $p2;
    $total[] = $p3;
    $total[] = $p4;
    $total[] = $p5;
    $total[] = $p6;

    $add = array_sum($total);

    $min = min($total);

    if ($drop ==true)
        return ($add-$min)/5;
    else
        return $add/6;

}




echo "computeAvg(15, 55, 55, 55, 25, 55, true) : you got " . computeAvg(15, 55, 55, 55, 25, 55, true) . " : expected 54 <br/>";      
echo "computeAvg(15, 55, 55, 55, 25, 55, false) : you got " . computeAvg(15, 55, 55, 55, 25, 55, false) . " : expected 53.33 <br/>";  
echo "computeAvg(15, 55, 55, 55, 27.5, 50, true) : you got " . computeAvg(15, 55, 55, 55, 27.5, 50, true) . " : expected 54 <br/>";    
echo "computeAvg(15, 55, 55, 55, 27.5, 50, false) : you got " . computeAvg(15, 55, 55, 55, 27.5, 50, false) . " : expected 53.33 <br/>"; 


?> 