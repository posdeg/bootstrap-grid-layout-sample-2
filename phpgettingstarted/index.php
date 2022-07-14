<?php
//all your code 
//$myNmame = "Cosmas Kung'u" ;
//echo $myNmame


//array
$students = array("Purity", "Annet","Roy", "Jamal","Diana");
echo $students[2];

//Associative array
$myMarks = array("Assesments" => 25,
"CAT" =>15,
"Projects" => 35,
"Attendavnce" => 8
);
echo "My Project Marks; " .$myMarks["Projects"];


// Multidimenitional Arrays
$webDevTechnologies = array(
    'frontend' => array('HTML', 'CSS', 'JS', 'Bootstrap'),
    'backend' => array('PHP', 'Python', 'Java', 'JS' ),
    'frameworks' => array('Laravel', 'Django', 'SpringBoot', 'Flutter'),
    'database' => array('MySQL', 'PostgreSQL', 'MongoDB', 'Firebase')

);
echo $webDevTechnologies['frontend'][2];
echo $webDevTechnologies['backend'][3];
echo $webDevTechnologies['frameworks'][2];
echo $webDevTechnologies['database'][0];



?>