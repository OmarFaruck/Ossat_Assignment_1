<?php 
echo "Marks & Subjects.";
echo "<br>";
echo "Sub_1 : ".$s1 = 70 ;
echo "<br>";
echo "Sub_2 : ".$s2 = 60 ;
echo "<br>";
echo "Sub_3 : ".$s3 = 80 ;
echo "<br>";
echo "Sub_4 : ".$s4 = 50 ;
echo "<br>";
echo "Sub_5 : ".$s5 = 30 ;
echo "<br>";

$total=$s1+$s2+$s3+$s4+$s5;
echo "<br>";
echo "Total Marks =".$total;

$per=($total/500)*100 ;
echo "<br>";


echo "Average Marks =".$per;

echo "<br>";

switch ($per/10){
    // case ($per>=80-100);
    case ($per>=80);
    echo " Grade A+ ";
    break;
    // case ($per>=70-79);
    case ($per>=70);
    echo " Grade A ";
    break;
    // case ($per>=60-69);
    case ($per>=60);
    echo " Grade A- ";
    break;
    // case ($per>=50-59);
    case ($per>=50);
    echo " Grade B ";
    break;
    // case ($per>=40-49);
    case ($per>=40);
    echo " Grade C ";
    break;
    // case ($per>=33-39);
    case ($per>=33);
    echo " Grade D ";
    break;
    default;
    echo " Grade F ";
    break;


}

