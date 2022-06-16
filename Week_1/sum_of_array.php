<?php
//a.FOREACH
function simpleArraySum($ar) {
    // Write your code here
    $sum = 0;
    
    foreach($ar as $value){
        $sum += $value;
    }
        
        return $sum;
}

/*//b.FOR
function simpleArraySum($ar) {
 
    
    $size = count($ar);
    $sum = 0;
    for($i=0 ; $i < $size; $i++){
      $sum += $ar[$i];
    }
    
    return $sum;
}

//c.WHILE 
function simpleArraySum($ar){
    $sum = 0;
    $i = 0;
    while($i < count($ar)){
        $sum += $ar[$i];
        $i++;
    }
    
    return $sum;

}*/

$ar = array(1,2,3,4,10,11);
?>
