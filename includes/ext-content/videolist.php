<?php
echo '<div class="container mt-5">';
$k=0;
for($i=0;$i<4;++$i){
      echo '<div class="row p-3">';
      for($j=1;$j<5;++$j){
            ++$k;
            echo '<div class="col vlist">'.$k.'</div>';
      }
      echo '</div>';
}
echo '</div>';
?>