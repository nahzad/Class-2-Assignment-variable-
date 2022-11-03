<?php

/* Question 01:

Your client said that he needs a dropdown, which contains all days of the running month. Sometimes we fill up a registration form that,
which date of birth. So find out in google (get number of days in specific month php) and do this assignment using a for loop.

Day quantity is not equal for every month. Like as - february - 28, March - 31, april - 30

So days of running month should dynamic (by php build in function)
 */

$current_year          = date( "Y" );
$current_month         = date( "F" );
$days_in_current_month = date( "t" );

echo "Current Year is : " . $current_year . "<br>";
echo "Running Month is : " . $current_month . "<br>";
echo "Days in this current Month: " . $days_in_current_month . "<br><br>";

echo "<h3>" . "Days in Current Month: " . $current_month . " - " . $current_year . "</h3>";

for ( $i = 1; $i <= $days_in_current_month; $i++ ) {
    echo $i . "<br>";
}

/* Question 02:
If we print 1-100, our output will be 100 times. But this time you have print out only the odd (বিজোড়) number within 1-100.
You have to rotate from 1 to 100.
Your output message should like that, “3 is a odd number”
Not need to print even number
 */

for ( $i = 0; $i <= 100; $i++ ) {

    if ( $i % 2 !== 0 ) {
        echo "$i is odd number" . "<br>";
    }

}

/* Question 03:
Factorial - I think everyone knows the word. Factorial of 4 is given below:
4! = 4*3*2*1 = 24
6! = 6*5*4*3*2*1 = 720
So let’s calculate the factorial of 7. */

$num = 7;

$fact = 1;

for ( $i = 1; $i <= $num; $i++ ) {
    $fact = $fact * $i;
}
echo "factorial of $num is = " . $fact;

/* Question 04:
print out form 100 -1 using a while loop.
You must use decrement operator */

for ( $i = 100; $i > 0; $i-- ) {
    echo $i . "<br>";
}

/*Question No 05:
- ['apple','orange', 'banana','mango']
- show all products as table list.
- Output should like that: "sl - 1 and product - apple"

 */

$arr = ['sl-1' => 'apple', 'sl-2' => 'orange', 'sl-3' => 'banana', 'sl-4' => 'mango'];

foreach ( $arr as $key => $products ) {
    echo "$key and product -" . $products . "<br>";
}

?>