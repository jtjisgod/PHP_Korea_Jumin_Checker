<?php


	// Very Dirty Source .. 
	// 2012년에 작성된 문서 입니다. 

 $jumin1=intval($_GET['jumin1']);
 $jumin2=intval($_GET['jumin2']);
 $jumin=$jumin1.$jumin2;
 $a=0;
 ECHO $jumin."</br>";
 ECHO "</br>";
 $a=2;
 $plus=0;
 for($i=0;$i<12;$i++)
 {
  $plus+=$jumin[$i]*$a;
  ECHO "</br>";
  ECHO $jumin[$i]."*".$a."=".$jumin[$i]*$a."&nbsp&nbsp합 : ".$plus;
  if($a==9) $a=2;
  else  $a++;
 }

 ECHO "</br>합 : ".$plus."</br>";
  ECHO "</br>";

 $plus=($plus%11)%10;

 ECHO "</br>나눈값 : ".$plus."</br>";
 $plus=11-$plus;
 ECHO "</br>뺀값: ".$plus."</br>";
 if($jumin[12]==$plus)
 {
  ECHO "1";
 }
 else
 {
  ECHO "2";
 }
 ECHO "</br>".$jumin[12];
 ECHO "</br>";
 ECHO $plus;
?>
