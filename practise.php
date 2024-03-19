<?php



// code 1
// $day = "Saturday";
// switch ($day) {
//     case "Monday":
//     case "Tuesday":
//     case "Wednesday":
//     case "Thursday":
//     case "Friday":
//         echo "It's a weekday.";
//         break;
//     case "Saturday":
//     case "Sunday":
//         echo "It's a weekend.";
//         break;
//     default:
//         echo "Invalid day.";
// }

// echo "<pre>";
// $earth = array(
//     "continent"=> array(
//         "country"=> array(
//             "city"=> array(
//                 "area"=> array(
//                     "society"=> array(
//                        "101"=> array(
//                             "humans"=> array(
//                                 'jahan',
//                                 'keshav'
//                          )
//                        ) 
//                     )
//                 )
//             )
//         )
//     )   
// );

// print_r($earth);





//FOREACH LOOP PRACTISE

// $colors = array("red", "green", "blue");
// foreach ($colors as $color) {
//     echo $color . "<br>";
// }


// $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
// foreach($age as $key => $value) {
//     echo "Key=" . $key . ", Value=" . $value;
//     echo "<br>";
// }



// $employees = array(
//     array("name" => "John", "age" => 30),
//     array("name" => "Jane", "age" => 25),
//     array("name" => "Smith", "age" => 35)
// );
// foreach ($employees as $employee) {
//     foreach ($employee as $key => $value) {
//         echo "$key: $value<br>";
//     }
//     echo "<br>";
// }



// class MyClass {
//     public $name = "John";
//     public $age = 30;
//     public $city = "New York";
// }

// $obj = new MyClass();
// foreach ($obj as $key => $value) {
//     echo "$key: $value<br>";
// }




// $str = "Hello";
// foreach (str_split($str) as $char) {
//     echo $char . "<br>";
// }


// $numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
// foreach ($numbers as $number) {
//     if ($number % 2 == 0) {
//         continue;
//     }
//     echo $number . "<br>";
// }


// $numbers = array(1,2,3,4,5);

// $total = 0;

// foreach($numbers as $num){

//     $total += $num;
// }

// echo "The total is:". $total;

// $numbers = array(55,88,99,48,75,24);

// $max = $numbers[0];


// foreach($numbers as $num){
//     if($num>$max){
//         $max = $num;
//     }
// }

// echo "The maximum number from the given array is...".$max;

// $mixarray = array(10,44,55,66,"20",30.5,"40",true,false,"50","jahan");

// $totalint = 0;
// $totalfloat = 0;
// $totalstring = 0;
// $totalboolean = 0;


// foreach($mixarray as $value){

//     if(is_int($value)){
//         $totalint++;
//      }
//     if(is_float($value)){
//         $totalfloat++;
//     }
//     if(is_bool($value)){
//         $totalboolean ++;
//     }
//     if(is_string($value)){
//         $totalstring++;
//     }





// }

// echo "Total integers: ".$totalint."<br>";
// echo "Total floats: ".$totalfloat."<br>";
// echo "Total booleans: ".$totalboolean."<br>";
// echo "Total strings: ".$totalstring."<br>";






class MyClass {
    private $myProperty;

    // Setter method
    public function setMyProperty($value) {
        $this->myProperty = $value;
    }

    // Getter method
    public function getMyProperty() {
        return $this->myProperty;
    }
}

$obj = new MyClass();

$obj->setMyProperty("Hello, world!");

echo $obj->getMyProperty(); 











?>