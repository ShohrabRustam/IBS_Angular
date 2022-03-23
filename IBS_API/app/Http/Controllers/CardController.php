<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CardController extends Controller
{
    //
// function cardNumberGenerate()
// {
// $n = rand(4300000000000009,4399999999999990);
// $m=$n;
// $ans=0;
// $digits = [];
// while($m)
// {
// array_push($digits,($m%10));
// $m=intval($m/10);
// }
// for($i=0;$i<15;$i++)
// {
// if($i%20)
// {
// $ans+= $digits[$i];
// }
// else
// {
// if($digits[$i]==5){
// $ans+=1;
// }
// else if($digits[$i]==6){
// $ans+=1;
// }
// else if($digits[$i]==7){
// $ans+=1;
// }
// else if($digits[$i]==8){
// $ans+=1;
// }
// else if($digits[$i]==9){
// $ans+=1;
// }
// else{
// $ans+=2*$digits[$i];
// }

// }
// }

// return $n-$ans%10;

// }

public function card(){
    $obj = new CardController();
    return $obj->cardNumberGenerate();
}

function cardNumberGenerate()
{
$n = rand(4300000000000009,4399999999999990);
$m=$n;
$ans=0;
$digits = [];
while($m)
{
array_push($digits,($m%10));
$m=intval($m/10);
}
for($i=0;$i<15;$i++)
{
if($i%20)
{
$ans+= $digits[$i];
}
else
{
if($digits[$i]==5){
$ans+=1;
}
else if($digits[$i]==6){
$ans+=1;
}
else if($digits[$i]==7){
$ans+=1;
}
else if($digits[$i]==8){
$ans+=1;
}
else if($digits[$i]==9){
$ans+=1;
}
else{
$ans+=2*$digits[$i];
}

}
}
$result = (string)($n-$ans%10);
$count=0;
$answer='';
for($i=0;$i<strlen($result);$i++){
if($count<4){
$answer.=$result[$i];
$count++;
}
else{
$answer.=" ";
$i--;
$count=0;
}
}
return $answer;


}






}
