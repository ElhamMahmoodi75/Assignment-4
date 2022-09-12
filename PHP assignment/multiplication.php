<?php
  
for($i=2;$i<=10;$i++)
 {
  for($counter=1;$counter<=10;$counter++)
     {
      printf("%d * %d = %d ",$i,$counter,($i*$counter));
      echo "  ";
      echo "<br> ";
      if($counter==10)
      {
      echo "<br> ";
      }
     }
}
 
 
 
 
 
 
?>