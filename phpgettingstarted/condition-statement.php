<?php
function checkEligibilityToVote()
{
    $age = 20;
    $myname = "Cosmas Kung'u";
    if ($age >=18)
    {
        echo " $myname You are eligible to vote";
    }
    else{
        echo "$myname You are not eligible to vote";
    }
}
//checkEligibilityToVote()

//grading
function gradindSystem()
{
    $marks = 36;
if($marks >=80)
{
    $grade = 'A (plain)';

}
elseif($marks >=75)
{
    $grade = 'A-';
}
elseif($marks >=65)
{
    $grade = 'B+';
}
elseif($marks >=60)
{
    $grade = 'B (Plain)';
}
elseif($marks >=50)
{
    $grade = 'C+';
}
else
{
    $grade = 'Fail';
}

echo "Your score is: $grade";
}
gradindSystem();

?>