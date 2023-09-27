<?php
$count=0;
$str="hello!welcome to atmiya";
$str=strtolower($str);
for($i=0;$i<strlen($str);$i++)
{
	if($str[$i]=='a' || $str[$i]=='i' || $str[$i]=='e' || $str[$i]=='o' || $str[$i]=='u')
	{
		$count++;
	}
}
echo "number of vowels=",$count;
?>