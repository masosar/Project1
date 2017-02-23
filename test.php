<?php
ini_set('display_errors', 1);
error_reporting(E_ALL); 
// class Problem
// {
//     public static function average($a, $b)
//     {
//         return ($a + $b) / 2;
//     }
// }

// echo Problem::average(2, 1);
// **************************************************************************************************


class FileOwners
{
    public static function groupByOwners($files)
    {
    	//foreach ($files as $key => $value) {
    	//	$return[$value[1]][] = $value[0];
    	//}
    	arsort($files);
    	print_r($files);
    	echo "<br/>";

    	$tempvar = 0;
    	$subArr = '';
    	$newMainArr = array();
        foreach ($files as $key => $value) {
        	if($tempvar != $value){
        		$newMainArr[$value]=$key;
        		$tempvar = $value;
        		$subArr=$key;
        	}else{
        		$subArr.=$key;
        		$newMainArr[$value]='*';
        	}

        	$newMainArr[$value]=$subArr;

		}
		//print_r($newValArr);
		print_r($newMainArr); echo "<br/>";
		echo $subArr."^";
    }

}


$files = array
(
    "Input.txt" => "Randy",
    "Code.py" => "Stan",
    "Output.txt" => "Randy"
);
echo FileOwners::groupByOwners($files);
//var_dump(FileOwners::groupByOwners($files));


// should print ["Randy"=>["input.txt","Output.txt"], "Stan"=>["Code.py"}]
// **************************************************************************************************

class Palindrome
{
    public static function isPalindrome($word)
    {
        $str1 = str_split($word);
        $str2 = array_reverse($str1);

        $newWord1 = implode($str1);
        $newWord2 = implode($str2);

        echo (strtolower($newWord1) == strtolower($newWord2))? 'true' : 'false';

    }
}

//echo Palindrome::isPalindrome('Radars');

// Write a function that checks if a given word is a palindrome. Case insensitive

?>