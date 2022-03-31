<?php
//risitas markes
$SubjectA = 75;
$SubjectB = 80;
$SubjectC = 65;
$SubjectD = 90;
//total markes
$total = $SubjectA + $SubjectB+ $SubjectC + $SubjectD;
//avrege markes
$avrege = $total / 4;
//echo $avrege;
if ($avrege >=80 && $avrege <=100){
    echo " You Got A+";
}else if ($avrege >=70 && $avrege <=79){
    echo " You Got A";
}else if($avrege >=60 && $avrege <=69){
    echo " You Got A-";
}else if ($avrege >=50 && $avrege <=59){
    echo " You Got B";
}else if ($avrege >=40 && $avrege <=49){
    echo " You Got C";
}else if ($avrege >= 01 && $avrege <=39){
    echo " You Got F";
};

                //=========================ASSIGNMENT TWO=======================================
$myBaike = "break";
 switch ($myBaike) {
     case 'start':
         echo ' bike takes a start ';
         break;
     case 'stop':
        echo 'bike takes a stop ';
         break;
    case 'break':
        echo 'your bike take break';
        break;
    case 'gear':
        echo 'your bike move faster and faster';
        break;
    case 'signal':
        echo 'your bike shows a signal light';
        break;
    case 'headlight':
            echo 'your bike’s headlight will start';
            default:
        echo 'my bike take rest';
 }
