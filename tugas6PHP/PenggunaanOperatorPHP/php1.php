<?php
$hasil1= -3;
$hasil2=3+5;
$hasil3=8-4.5;
$hasil4=2*5;
$hasil5=3+8/5-3;
$hasil6=10%4;

var_dump($hasil1);//outputnya int(-3) *tipedatanya juga akan keluar sesuai dengan valuenya
echo "<br>";
echo $hasil1;//outpunya -3
echo "<br>";
echo "$hasil1:"; //outpunya -3
echo "<br>";
echo "\$hasil2:"; var_dump($hasil2); //outpunya $hasil2:int(8) 
echo "<br>";
echo "\$hasil3:"; var_dump($hasil3); // $hasil3:float(3.5)  
echo "<br \>"; echo "\$hasil4:"; var_dump($hasil4); // outpunya $hasil4:int(10)  
echo "<br \>"; echo "\$hasil5:"; var_dump($hasil5); //outpunya $hasil5:float(1.6) 
echo "<br \>"; echo "\$hasil6:"; var_dump($hasil6); // outpunya $hasil6:int(2)
?>