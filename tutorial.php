<?php
/**
 * ================
 * CONDITIONS
 * ================
*/

// if statement, if else statement..., elseif Statement...
// $x = 5;
// $y = 5;

// if (true) {
//     echo "Is greater!";
// } elseif ($x == $y) {
//     echo "They are equal to each other";
// } elseif ($x < $y) {
//     echo "Not greater!";
// }

// $x = 3;
// $x += 7;
// $x -= 4;
// $x /= 2;
// $x *= 3;
// $x %= 2;

// echo $x;

// Comparison operators...

// echo '5' !== 5;

// Increment and Decremen operators...

// $x = 3;
// $x--;
// // echo $x;

// // Logical operator...

// $rainy = true;
// $sunny = true;
// $night = true;

// if ($rainy or $sunny or $night){
//     echo "Don't go out!";
// }else{
//     echo "You can go out!";
// }



// // Classwork...

// $name = "Peace";
// $gender = "female";
// $height = 5.2;
// $complexion = "dark";

// if ($name == "Peace" && $gender == "male" && $height == 5.2 && $complexion == "dark") {
//     echo "<h1 style='color:green'>Criminal Found</h1>";
// } else {
//     echo "<h1 style='color:red'>Criminal not Found</h1>";
// }

// // echo "Hi, my name is " . $name;

// // Switch...
// $favColor = 'red';
// switch ($favColor) {
//     case 'red':
//         echo "Your favotite color is red<br>";
//         // break;
    
//     case 'green':
//         echo "Your favotite color is green<br>";
//         break;
    
//     case 'blue':
//         echo "Your favotite color is blue<br>";
//         break;

//     default:
//         echo "Your favorite color is neither red, green, nor blue";
//         break;
// }


### Arrays...
// // Indexed arrays...
// $names = array('Nk', 'Ayo', 5, 'Funke');
// // $names[0] = "Nk";
// // $names[1] = "peace";
// // $names[2] = 5;
// // $names[3] = "Funke";
// // $names[4] = "Omotayo";
// echo $names[1] . "<br>";
// echo count($names) . "<br>"; // Lenght of the array...
// echo $names[count($names) - 1] . "<br>";
// $names[count($names)] = "Omotayo";
// echo $names[count($names) - 1] . "<br>";
// echo count($names) . "<br>";


// // Associative arrays...

// $student = array("name" => 'Ayomide', "age" => 13, "class" => "JSS3");
// // $student["name"] = "Ayomide";
// // $student["age"] = 13;
// // $student["class"] = "JSS3";
// // echo $student["name"];

// echo count($student) . "<br>";



// Multidimensional arrays...
// $users = array(
//     array("name" => 'Ayomide', "age" => 13, "clas" => "JSS3"),
//     array("name" => 'Oluchi', "age" => 15, "clas" => "SS2"),
//     array("name" => 'Joseph', "age" => 16, "clas" => "SS3")
// );

// echo $users[2]["name"];


// Functions...

# for loop
# while loop
# do-while loop


## For loops...
// echo "<table>
//     <tr>
//         <th>Name</th>
//         <th>Age</th>
//         <th>Class</th>
//     </tr>
//     ";

// for ($i=0; $i < count($users); $i++) { 
//     $userName = $users[$i];

//     echo "<tr>
//         <td>" . $userName["name"] . "</td>
//         <td>" . $userName["age"] . "</td>
//         <td>" . $userName["clas"] . "</td>
//     </tr>";
// };

// echo "</table>";


// ## While loops

// $count = 0;

// echo "<strong>Odd Numbers</strong><br>";
// while ($count <= 10) {
//     if ($count % 2 == 1 && $count != 0) {
//         echo $count . "<br>";
//     };

//     $count++;
// }

// $count >= 10 ? $count = 0 : '';


// echo "<strong>Even Numbers</strong><br>";
// while ($count <= 10) {
//     if ($count % 2 == 0 && $count != 0) {
//         echo $count . "<br>";
//     };

//     $count++;
// }

// $count >= 10 ? $count = 1 : '';

// ## do...while loop

// do {
//     echo $count . "<br>";
//     $count++;
// } while ($count <= 10);


// ## for...each

// foreach ($users as $user) {
//     echo $user['name'] . "<br>";
// }



// // Functions...

// function sum($a, $b){
//     $sum = $a + $b;

//     return $sum;
// }

// // $sum =  sum(5, 2);
// // echo $sum;

// function area_circle($r){
//     $r_square = $r ** 2;
//     $area = 3.142 * $r_square;
//     return $area;
// }

// echo area_circle(6);

$str = "This is a string";
echo substr($str, 1);
