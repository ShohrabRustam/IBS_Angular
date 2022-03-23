<!DOCTYPE html>
<html>
<body>

	<?php
	/*
	**
	**
	**
	**
	**@author Rustam
	**
	*/

function sumTwoDigit($n){
return ($n%10)+ intval($n/10);
}
function cardNumberGenerate()
{
$n = rand(66000000000009,66999999999999);
$m=$n;
$ans=0;
$digits = [];
while($m)
{
array_push($digits,($m%10));
$m=intval($m/10);
}

for($i=0;$i<16;$i++)
{
if($i%2==0)
{
$ans+=$digits[$i];
}
else
{

	$ans+=sumTwoDigit(2*$digits[$i]);


}
}
if($digits[0]>=($ans%10)){
return ($n - $ans%10);
}else{
cardNumberGenerate();
// or  for reduce the stack and time complexity
return $n+(10-$ans%10);

}
}


function checkCardNumber($n)
{
$m=$n;
$ans=0;
$digits = [];
while($m)
{
array_push($digits,($m%10));
$m=intval($m/10);
}

for($i=0;$i<16;$i++)
{
if($i%2==0)
{
$ans+=$digits[$i];
}
else
{

	$ans+=sumTwoDigit(2*$digits[$i]);


}
}
if(($ans%10)==0){
return "Correct !!!";
}
else{
return "Incorrect !!!";
}
}
echo checkCardNumber(cardNumberGenerate());


?>

</body>
</html>
