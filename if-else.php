<?php

// if(10>2)
// {
//     echo "true";

// }
// else
// {
//     echo "false";
// }


// if(1>2)
// {
//     if(5>2)
//     {
//         echo "true";

//     }
// }
// else
// {
//     echo "false";

// }

// if(45>20)
// {
//     echo "true 1st if ";
// }
// else if(10>20)
// {
//     echo "true 2nd elseif";
// }
// else if(4>20)
// {
//     echo "true by 3rd else if";
// }
// else
// {
//     echo "false";
// }



//MARKING SYSTEM

// $studentscore = 78;

// if($studentscore>=90)
// {
//     $grade='A';
// }
// elseif($studentscore>=80)
// {
//     $grade='B';
// }
// elseif($studentscore>=70)
// {
//     $grade='C';
// }
// elseif($studentscore>=60)
// {
//     $grade='D';
// }
// else
// {
//     $grade='F';
// }

// echo "Student Score is : $studentscore \n";
// echo "Grade: $grade  \n ";


//CHEKING AGE GIVING PERMISSIONS...

// $personage=20;

// $indiaAgeRequirement = 18;
// $usaAgeRequirement = 20;
// $canadaAgeRequirement = 21;



// if ($personage >= $indiaAgeRequirement) {
//     echo "You are eligible for a driver's license in INDIA <br>";
// } else {
//     echo "You are not eligible for a driver's license in INDIA <br>";
// }

// if ($personage >= $usaAgeRequirement) {
//     echo "You are eligible for a driver's license in the USA.<br>";
// } else {
//     echo "You are not eligible for a driver's license in the USA.<br>";
// }

// if ($personage >= $canadaAgeRequirement) {
//     echo "You are eligible for a driver's license in Canada.<br>";
// } else {
//     echo "You are not eligible for a driver's license in Canada.<br>";
// }


// MENU



$menuChoice = 2; 

if ($menuChoice == 1)
{
    echo "You selected Option 1: View Profile.<br>";
} 

elseif ($menuChoice == 2) 
{
    echo "You selected Option 2: Edit Profile.<br>";
} 

elseif ($menuChoice == 3) 
{
    echo "You selected Option 3: Change Password.<br>";
} 

elseif ($menuChoice == 4) 
{
    echo "You selected Option 4: Logout.<br>";
} 

else 
{
    echo "Invalid choice. Please select a valid option.<br>";
}





?>