<?php
  $rice = 2*75;
  $goru = 1*850;
  $murgi = 2*320;
  $moris = 10;
  $extra = 65;

  $total = $rice + $goru + $murgi + $moris +$extra;

  echo "75tk/kg 2kg rice price {$rice} tk.<br>"."850tk/kg 1kg goru price {$goru} tk.<br>". "320tk/kg 2kg murgi price {$murgi} tk.<br>". "10tk murgi price {$moris} tk.<br>"."extra {$extra} tk.<br>"."which is in total {$total} tk";


  echo "<br>";
  echo "<br>";
  echo "<br>";

  $n1 = 40;
  $n2 = 50;
  $n3 = 30;

  if($n1 > $n2 && $n1 > $n3){
    echo "n1 is largest {$n1} > {$n2} or {$n3}";
  }else if($n2 > $n1 && $n2 > $n3){
    echo "n2 is largest {$n2} > {$n1} or {$n3}";
  }
  else{
    echo "n3 is largest {$n3} > {$n1} or {$n2}";
  }

  echo "<br>";
  echo "<br>";
  echo "<br>";

  $s1 = 40;
  $s2 = 200;
  $s3 = 30;

  if($s1 < $s2 && $s1 < $s3){
    echo "s1 is smallest {$s1} < {$s2} or {$s3}";
  }
  else if($s2 < $s1 && $s2 < $s3){
    echo "s2 is smallest {$s2} < {$s1} or {$s3}";
  }
  else{
    echo "s3 is smallest {$s3} < {$s1} or {$s2}";
  }



?>
