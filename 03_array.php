<?php
//PHP Data Types

// 1. String
// 2.Integer
// 3. Float
// 4. Array
// 5. Object
// 6. null
// 7. Resource

//1. Array
?>

<?php 
$student = ["a","b","c"]; //normal array
$assoc_array = ['name'=>'Shyam Sharma', 'Address'=>'butwal-09']; //associative array
$students = [
                ['id'=>001, 'name'=>'ujjwal', 'college'=>'BMC', 'program'=>'CSIT'],
                ['id'=>001, 'name'=>'Avishek', 'college'=>'Nepathye', 'program'=>'BTec'],
                ['id'=>001, 'name'=>'Sachin', 'college'=>'LCC', 'program'=>'BCA'],
];

$students = [
                'first'=>['id'=>001, 'name'=>'ujjwal', 'college'=>'BMC', 'program'=>'CSIT'],
                'second'=>['id'=>001, 'name'=>'Avishek', 'college'=>'Nepathye', 'program'=>'BTec'],
                'third'=>['id'=>001, 'name'=>'Sachin', 'college'=>'LCC', 'program'=>'BCA'],
];

echo $students['third']['name'];
//output: sachin



echo "<br><br><br>";
echo "<pre>";
var_dump($students);

exit();

echo $students[2]['program'];
$students[1]['program'] = "Bsc. CSIT";

print_r($students); // print_r() function is used while printing array variable 
// echo "<pre>";

//accessing array elements
echo $student[2];
//accessing array elements (associative array)
echo $assoc_array['Address'];

echo "<pre>";
var_dump($assoc_array);
echo "</pre>";

?>
