<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("class_lib.php");

$user1 = new User();

$user1->firstName = "Jane";
$user1->lastName = "Roe";

//$fullName = $user1->firstName." ".$user1->lastName;

//$hello = $user1->hello();

//echo $hello." ".$fullName;

//echo $user1->hello(); 

$user1->register()->mail()->hello();


$user2 = new User();

$user2->firstName="Jonnie";
$user2->lastName="Roe";
echo $user2->hello();


$bmw = new Car();

$bmw->color = "Red";
$bmw->comp = "BMW";

echo "<br/>".$bmw->hello()."<br/>";

// Add 10 gallons of fuel, then ride 40 miles, 
// and get the number of gallons in the tank.

$bmw->fill(10)->ride(40)->tank;

echo "<br/>Remaining gallons in tank: ".$bmw->tank."<br/>";


?>
<br>
<br>
<?php 

$jack = new Pet();

//$jack->petName = "Jack"; //Not a good practice

$jack->setPetName('Jack');

echo $jack->getPetName();



$text1=new input();

$text1->setInputName('name');

echo $text1->getInputName();


$form1 = new form();

$form1->setFormName('form1');

echo $form1->getFormName();

$introduction = new intro();

$introduction->setName('Scott');

echo $introduction->getName();





$bmw = new Fac();


$bmw->ride(10);

echo $bmw->tank."<br/>";


$fff = new Factorial();
$fff->factorize(5);
echo $fff->fact;

$basicOperations = new basicMath();

$basicOperations->calculate(1233142,556);

echo "<br/>".$basicOperations->result."<br/>";



$myFactorial= new GetFactorial(22);

//$myFactorial->factorized(10);
echo $myFactorial->factorized()."<br>";




$factR = new FactorialRupestre();
$factR->factorize(5);
echo $factR->result."<br>";




$newfactorial = new factorial_of_a_number(6);
echo $newfactorial->result()."\n";



$orderedArrayVar = new Sorter(array(11, -2, 4, 35, 0, 8, -9));
print_r($orderedArrayVar->alhsort())."\n";

echo "<br>";

$decode_Json = new DecodeJSON('{"Title": "The Cuckoos Calling", "Author": "Robert Galbraith", "Detail": { "Publisher": "Little Brown" }}');
print_r($decode_Json->decodeString());

echo "<br>";
echo "<br>";

$divisibles = new ShowDivisibles(17,0,150);

echo "<br>";
echo "<br>";

$worm = new Gusanito(
	array(
	  	array('a','b','c','d'),
	  	array('e','f','g','h'),
	  	array('i','j','k','l'),
	  	array('x','y','z','zz'),
	  	array('1','2','3','4')
	)
);
echo "<br>";
echo "<br>";

$mercedes = new Car2("Mercedes Benz");

//$mercedes->setModel("Mercedes Benz");

echo $mercedes->getModel();
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>"; //Test1S

?>
