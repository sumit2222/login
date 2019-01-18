<?php



function FirstRepetition($array) {
    $b = array();
    foreach($array as $value) {

        if (in_array($value, $b)) {
            return $value;
        }

        $b[] = $value;
    }
    return FALSE;
}



$a=array('A','B','C','C','A');

echo FirstRepetition($a);




















/*$c=count($a);
$in=-1;

$d;
$el=0;
//echo $c;
for($i=0;$i<$c;$i++){
	
	for($k=$i+1;$k<$c;$k++){
	if($a[$i]==$a[$k]){
	//$b=$k;
     echo $k;
	$el=$el+1;
	}	
	}
	
}
if($el==0){
	echo "There is no repeating element";
}*/

?>