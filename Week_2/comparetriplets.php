<?php
function compareTriplets($a, $b) {
    // Write your code here
    $aAward = 0;
    $bAward = 0;
    
    for ($i=0;$i<3;$i++){
        if($a[$i]>$b[$i]){
            $aAward +=1;
        }elseif($a[$i]<$b[$i]){
            $bAward +=1;
        }
    }
return array($aAward,$bAward);
}
?>