<?php
/*
====================================================================
Problem 01. Create a funciton that will return children,teenagers,
young people, Old people from the age.
====================================================================
 */
echo "<h3>Solution for Problem : 01</h3>"; // for showing Question no in output page

#This function will get random number of age as argument to check in the condition below
function ageDetector( $age ) {
    if ( $age > 0 && $age <= 13 ) {
        return "Children";
    } elseif ( $age > 13 && $age <= 18 ) {
        return "Teenageres";
    } elseif ( $age > 18 && $age <= 30 ) {
        return "Young people";
    } elseif ( $age > 30 && $age <= 100 ) {
        return "Old people";
    } else {
        return "You are alien !";

#NOTE : Those age numbers are considered as demo value for this function purpose only.

    }
}

echo ageDetector( 12 ) . "<br>";
echo ageDetector( 17 ) . "<br>";
echo ageDetector( 28 ) . "<br>";
echo ageDetector( 54 ) . "<br>";
echo "<hr>"; //for shwoing horizontal line for problem separator in output page ----------------------------------------------------
/*
====================================================================
Problem 02. Create a funciton that will return the area of
a rectangle, square, triangle
====================================================================
 */
echo "<h3>Solution for Problem : 02</h3>"; // for showing Question no in output page
#Using $type for specifing targeted condition to run
#This funciton will get at least two argument (type and length/width), default values are taken to avoid error for empty value
function area( $type = '', $length = 0, $width = 0 ) {
#when $type value = square then it will calculate for area of SQUARE  others condition will be ignored.
    if ( $type == 'square' ) {
        return $length * $length;

#when $type value = rectangle then it will calculate for area fo RECTANGLE others condition will be ignored.
    } elseif ( $type == 'rectangle' ) {
        return $length * $width;

#when $type value = triangle then it will calculate for area of TRIANGLE others condition will be ignored.
    } elseif ( $type == 'triangle' ) {
        return .5 * $length * $width;
    }
}
echo "Area of Square = " . area( 'square', 60 ) . "<br>";
#NOTE:argument for area of rectangle ('rectangle',$length, $width)
echo "Area of Rectangle = " . area( 'rectangle', 60, 30 ) . "<br>";

#and for area of triangle ('triangle',$length,$width)
echo "Area of Triangle = " . area( 'triangle', 20, 30 ) . "<br>";

echo "<hr>"; //for shwoing horizontal line for problem separator in output page ----------------------------------------------------
/*
====================================================================
Problem 03. GPA funciton for result publishing
====================================================================
 */
echo "<h3>Solution for Problem : 03</h3>"; // for showing Question no in output page

function gpa_result( $bangla, $english, $math, $science, $religion, $ict ) {

    #if any subject marks is less then 32/pass marks then it will show failed, otherwise it will run rest of the function.

    if ( $bangla <= 32 || $english <= 32 || $math <= 32 || $science <= 32 || $religion <= 32 || $ict <= 32 ) {
        return "You are Failed";
    } else {
        $averageMarks = ( $bangla + $english + $math + $science + $religion + $ict ) / 6;
    }

    $averageMarks = round( $averageMarks ); #using round function to avoid fraction numbers.

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

    case ( $averageMarks >= 0 && $averageMarks <= 32 ):
        $grade = "F";
        break;

    default:
        echo "Invalid Marks";
        break;

    }

    return "Your Average Marks is = " . $averageMarks . ", and you have got = " . $grade . "<br>";

}
#This function will get those subject marks as argument
echo gpa_result( 70, 78, 87, 33, 60, 80 );

echo "<hr>"; //for shwoing horizontal line for problem separator in output page ----------------------------------------------------

/*
==============================================
Problem 04. Create a age calculator function
==============================================
 */
echo "<h3>Solution for Problem : 04</h3>"; // for showing Question no in output page
#This function will take random year as argument, it can calculate the difference of year only
function getAge( $name, $year ) {
    return "Your name is : " . $name . " and you are " . date( "Y" ) - $year . " years old";
}

echo getAge( "Ratul", 2000 ); // name parameter taken only for showing name of the person, as demo purpose only for this function

echo "<hr>"; //for shwoing horizontal line for problem separator in output page ----------------------------------------------------
/*
=============================================
Problem 05. Create a BMI function for health
=============================================
BMI = Body Mass Index
18.5        = thin
18.5 - 24.9 = Normal
25   - 29.9 = overweight
30   - 34.9 = obesity
35   - 39.9 = obesity high step I
over 40     = obesity very high II

BMI = {mass / (height)*(height)}

 */
echo "<h3>Solution for Problem : 05</h3>"; // for showing Question no in output page

function BMI( $mass, $height ) { # body mass input in Kg and height in feet.
    $height = ( $height * 12 ) * 0.0254;
    return $mass / pow( $height, 2 );
}

function showBmi( $bmi ) {
    if ( $bmi <= 18.5 ) {
        return "Thin";
    } elseif ( $bmi > 18.5 && $bmi <= 25 ) { # I have taken round value of BMI numbers for this function purpose.

        return "Normal";
    } elseif ( $bmi > 25 && $bmi <= 30 ) {
        return "Over Weight";
    } elseif ( $bmi > 30 && $bmi <= 35 ) {
        return "Obesity";
    } elseif ( $bmi > 35 && $bmi <= 39.9 ) {
        return "Obesity High Step I";
    } elseif ( $bmi >= 40 ) {
        return "Obesity Very High Step II";
    }

}

$bmi = BMI( 68, 5.5 ); # argument for body mass in kg , and height in feet.

echo "Your BMI is = " . round( $bmi ) . "<br>";

echo "Health status = " . showBmi( $bmi );

echo "<hr>"; //for shwoing horizontal line for problem separator in output page ----------------------------------------------------

/*
=====================================================================================
Problem 06. Create a currency converter funciton from taka to USD,CAD,POUND,EURO etc.
=====================================================================================
 */

echo "<h3>Solution for Problem : 06</h3>"; // for showing Question no in output page

#This funciton will take two parameter as curr type and amount of taka
function curr_converter( $curr, $amount_tk ) {
#when curr type USD then it will convert Taka to USD only. This logic will implement for rest of the conditions.

    if ( $curr == "USD" ) {
        return $amount_tk . " Taka = " . $amount_tk * 0.012 . " USD Only";

    } elseif ( $curr == "CAD" ) {
        return $amount_tk . " Taka = " . $amount_tk * 0.015 . " CAD Only";

    } elseif ( $curr == "POUND" ) {
        return $amount_tk . " Taka = " . $amount_tk * 0.0091 . " Pound Only";

    } elseif ( $curr == "EURO" ) {
        return $amount_tk . " Taka = " . $amount_tk * 0.011 . " Euro only";

    } else {
        return "Sorry, Conversion not possible";
    }

}

echo curr_converter( "USD", 5500 ) . "<br>"; # Here curr type is USD and number of amount in Taka.
echo curr_converter( "CAD", 5500 ) . "<br>"; # Here curr type is CAD and number of amount in Taka.
echo curr_converter( "POUND", 5500 ) . "<br>"; # Here curr type is POUND and number of amount in Taka.
echo curr_converter( "EURO", 5500 ) . "<br>"; # Here curr type is EURO and number of amount in Taka.

echo "<hr>"; //for shwoing horizontal line for problem separator in output page ----------------------------------------------------