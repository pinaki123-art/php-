<?php
$y = array('x1'=>array('a','b','c'),'x2'=>array('d','e'));


foreach($y as $element=>$item){
  echo '<strong>'.$element.'</strong><br>';
  
foreach($item as $item1){
  echo $item1.'<br>';
}
}    


?>
