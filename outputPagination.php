<?php function outputPagination($startNum, $currentNum){
  echo "<ul class='pagination'>";
  echo '<li class="disabled"><a href="#">&laquo;</a></li>';
  $specialCase = false;
  if($startNum<=10){
    echo "<li class='disabled'><a href='#'>$startNum</a></li>";
    $specialCase = true;
  }
  if ($specialCase==true) {
    for ($i=$startNum+1; $i<$startNum+11 ; $i++) {
      if($i==$currentNum){
        echo "<li class='active'><a href='#'>$i</a></li>";
      }
      else {
        echo "<li><a href='#'>$i</a></li>";
      }
    }
  }
  else {
    for ($i=$startNum; $i<$startNum+10 ; $i++) {
      if($i==$currentNum){
        echo "<li class='active'><a href='#'>$i</a></li>";
      }
      else {
        echo "<li><a href='#'>$i</a></li>";
      }
    }
  }

  echo '<li><a href="#">&raquo;</a></li>';
  echo "</ul>";
} ?>
