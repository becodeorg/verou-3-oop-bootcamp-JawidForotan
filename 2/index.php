
<?php

// Use Case #3
// There's two groups, both of 10 students. Every student has a name (even Jaqen) and gets a grade. You can have some
// fun coming up with the content here :-)
// Provide an easy way to calculate the average score of a group.
// Add a function to move a student from one group to another.
// Show the average score of both groups. Move the top student from one group with the lowest scoring student from another.
// Show the averages again - how were these affected?

$group1 = [
    $student1 = ["name" => "Jawid", "grade" => 1],
    $student2 = ["name" => "ahmad", "grade" => 10],
    $student3 = ["name" => "feruz", "grade" => 18],
    $student4 = ["name" => "magali", "grade" => 4],
    $student5 = ["name" => "kevin", "grade" => 5],
    $student6 = ["name" => "michelle", "grade" => 12],
    $student7 = ["name" => "cynthia", "grade" => 7],
    $student8 = ["name" => "sara", "grade" => 20],
    $student9 = ["name" => "ellen", "grade" => 8],
    $student10 = ["name" => "koen", "grade" => 9],
];

$group2 = [
    $student11 = ["name" => "michael", "grade" => 20],
    $student12 = ["name" => "jian", "grade" => 19],
    $student13 = ["name" => "jordy", "grade" => 5],
    $student14 = ["name" => "benjamin", "grade" => 17],
    $student15 = ["name" => "ruben", "grade" => 16],
    $student16 = ["name" => "beryl", "grade" => 15],
    $student17 = ["name" => "dery", "grade" => 3],
    $student18 = ["name" => "muhammet", "grade" => 10],
    $student19 = ["name" => "dante", "grade" => 8],
    $student20 = ["name" => "colin", "grade" => 9],
];

$group1Student = $group1[0];
array_push($group2, $group1Student);

$group2Student = $group2[0];
array_push($group1, $group2Student);

function getAverage($groupName)
{
    $name = "";
    $grade = 0;
    $average = 0;
    $total = 0;
    $amount = 0;
    foreach($groupName as $item){
        $name = $item["name"];
        $grade = $item["grade"];
        echo "<b>Name</b> : {$name}, <b>grade:</b> {$grade} <br/>";
        $total += (int)$grade;
    }
    echo "<br/>";
    echo "<b>Total group score:</b> {$total}<br/>";
    $amount = sizeof($groupName); 
    $average = round($total/$amount); 
    echo "<b>Average:</b> {$average}";
}
echo "<h1>Group 1</h1>";
getAverage($group1);
echo "<h1>Group 2</h1>";
getAverage($group2);


?>