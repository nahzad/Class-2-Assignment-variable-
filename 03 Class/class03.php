<?php

/*
Question 01:
Let’s make a result grade calculator…
Rishita’s subject marks: SubjectA = 75, SubjectB = 80, SubjectC = 65, SubjectD = 90.
Result Calculation formula: Sum all subjects marks and divided by total subject quantity.
From this given formula, you will get a mark. Show the Grade message by the mark.
A+ = 80 - 100
A   = 70 - 79
A-  = 60 - 69
B   = 50 - 59
C   = 40 - 49
F   = 01 - 39
Firstly you have to calculate the average mark of Rishita.
Secondly you have to show the grade message (Like as: “You got A+”) by following this grading range*/

// Rishita's all subject marks
$subjectA = 75;
$subjectB = 80;
$subjectC = 65;
$subjectD = 90;

// To get Average marks, add all subjects and devided by number of subjects
$averageMarks = ( $subjectA + $subjectB + $subjectC + $subjectD ) / 4;

$grade = " ";

switch ( $averageMarks ) {
case ( $averageMarks >= 80 && $averageMarks <= 100 ):
    $grade = "A+";
    break;

case ( $averageMarks >= 70 && $averageMarks <= 79 ):
    $grade = "A";
    break;

case ( $averageMarks >= 60 && $averageMarks <= 69 ):
    $grade = "A-";
    break;

case ( $averageMarks >= 50 && $averageMarks <= 59 ):
    $grade = "B";
    break;

case ( $averageMarks >= 40 && $averageMarks <= 49 ):
    $grade = "C";
    break;

case ( $averageMarks >= 39 && $averageMarks <= 01 ):
    $grade = "F";
    break;

default:
    echo "Invalid Marks";
    break;

}

echo "Your Average Marks is = " . $averageMarks . "<br>";
echo "You have got = " . $grade;

/*Question 02:

Let’s make a game with your bike… You are riding a bike, your bike has some functionalities, these are… start, stop, break, gear, signal, headlight.

When you click on the power/start button, your bike takes a start,

When you click stop, your bike takes a stop,

When you press the break, your bike take break,

when you give the gear, your bike move faster and faster,

when you press the signal button, your bike shows a signal light.

When you press the headlight button, your bike’s headlight will start.

Solve this game using Switch case and submit it on github.*/

// let, we have a Bike name = Bike;

$Bike = "gear";

switch ( $Bike ) {
case ( "start" ):
    echo "Bike is start";
    break;
case ( "gear" ):
    echo "Bike is runnig faster";
    break;
case ( "signal" ):
    echo "Bike shows the signal";
    break;
case ( "break" ):
    echo "Bike take break";
    break;
case ( "headlight" ):
    echo "Bike's Headlight is on";
    break;
case ( "stop" ):
    echo "Bike stoped";
    break;
default:
    echo "You have to learn how to drive a Bike!";
    break;

}

?>