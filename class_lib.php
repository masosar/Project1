<?php  



class User{
	public $firstName;
	public $lastName;

	public $reg;

	public function hello(){
		return "Hello ".$this->firstName." ".$this->lastName;
	}

	public function register(){
		echo $this->firstName." ".$this->lastName. " registered";
		return $this;
	}

	public function mail(){
		echo "emailed";
		return $this;
	}
}

class Car{
	public $comp;
	public $color = "Red";
	public $hasSunRoof = true;
	public $tank;

	public function hello(){
		return "I am an <i>".$this->comp."</i>, and I am <i>".$this->color."</i>.";
	}

	// Add gallons of fuel to the tank when we fill it.
	public function fill($float){
		$this->tank+=$float;
		return $this;
	}

	//Substract gallons as we ride
	public function ride($float){
		$miles = $float;
		$gallons = $miles/50;
		$this->tank -= ($gallons);
		return $this;
	}
}


class Pet{
	public $petName;

	public function setPetName($newPetName){
		$this->petName=$newPetName;
	}

	public function getPetName(){
		return $this->petName;
	}
}

class input{

	public $inputName;

	public function setInputName($newInputName){
		$this->inputName=$newInputName;
	}

	public function getInputName(){
		return $this->inputName;
	}
}
class form{
	public $formName;

	public function setFormName($newFormName){
		$this->formName=$newFormName;
	}

	public function getFormName(){
		return $this->formName;
	}
}
 
class intro{
	public $name;

	public function setName($newName){
		$this->name=$newName;
	}

	public function getName(){
		return "Hello all. I am ".$this->name.".";
	}
}

class Fac{
	public $tank;

	public function ride($float){
		$this->tank = $float;
		return $this;
	}
}

class Factorial{
	public $fact;

	public function factorize($float){
		$this->fact = $float*2;

	}
}


class basicMath{
	public $added;
	public $rested;
	public $divided;
	public $multiplied;
	public $result;

	public function calculate($c,$d){
		$this->added=$c+$d;
		$this->rested=$c-$d;
		$this->multiplied=$c*$d;
		if($d==0)
			$this->divided = "Invalid operation.";
		else
			$this->divided=$c/$d;

		$this->result="Basic operations result for ".$c.", ".$d." are: Addition -> ".$this->added."; Substraction ->".$this->rested."; Multiplication -> ".$this->multiplied."; Division -> ".$this->divided;
	}
}


class GetFactorial{
	public $result;
	public $_n;

	public function __construct($n){
		$this->_n=$n;
	}

	public function factorized(){
		$this->result= $this->_n."! = ".gmp_fact($this->_n);
		return $this->result;
	}
}



class FactorialRupestre{
	public $result;

	public function factorize($num){
		$arr=array();
		$product=0;
		for($i=$num; $i>=1; $i--){
			$arr[]=$i;
		}
		$product=array_product($arr);
		$this->result=$num."! = ".$product;
	}
}


class factorial_of_a_number
{
  protected $_n;
  public function __construct($n)
   {
     if (!is_int($n))
	   {
	      throw new InvalidArgumentException('Not a number or missing argument');
       }
    $this->_n = $n;
	}
  public function result()
    {
     $factorial = 1;
     for ($i = 1; $i <= $this->_n; $i++)
	  {
	    $factorial *= $i;
      }
	   return $factorial;
	 }
 }

 //Sample array : array(11, -2, 4, 35, 0, 8, -9) Output : Array ( [0] => -9 [1] => -2 [2] => 0 [3] => 4 [4] => 8 [5] => 11 [6] => 35 ) - See more at: http://www.w3resource.com/php-exercises/php-class-exercises.php#sthash.8zbq9S8g.dpuf
class Sorter{
	
	protected $_asort;

	public function __construct(array $asort){
		$this->_asort=$asort;
	}

	public function alhsort(){
		$sorted=$this->_asort;
		sort($sorted);
		return $sorted;
	}
}


//Decode a JSON string:

class DecodeJSON{
	protected $_jsonString;

	public function __construct($jsonString){
		$this->_jsonString=$jsonString;
	}

	public function decodeString(){
		$stringToDecode=$this->_jsonString;
		$decodedString=json_decode($stringToDecode, true);
		return $decodedString;
	}
}


class ShowDivisibles{
	protected $result;

	public function __construct($step,$initial,$final){
		$this->result= implode(',',range($initial,$final,$step));
		echo $this->result;
	}

}


class Gusanito{
	protected $_arrFin;
	
	public function __construct(array $a){
		for($i=0; $i<sizeof($a[0]); $i++){
			$i%2==1?$this->_arrFin[$i] = array_reverse(array_column($a, $i)) : $this->_arrFin[$i]= array_column($a, $i);
		}																	
		print_r($this->_arrFin);
	}
}

class Car2{
	private $_model;

	public function __construct($model){
		$this->_model=$model;
	}
	//public function setModel($model){
	//	$this->_model=$model;
	//}

	public function getModel(){
		return __CLASS__ ."The car model is ".$this->_model;
	}
}



?>