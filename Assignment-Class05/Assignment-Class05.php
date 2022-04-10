<?php
/*Question 01:

We have an array [12,34,2,6,78]. What kind of array is this? Find all prime numbers from this array.
Step 1: First let us find the factors of the given number( factors are the number that completely divides the given number)
Step 2: Then check the total number of factors of that number
Step 3: Hence, If the total number of factors is more than two, it is not a prime number but a composite number. Because When a number is divisible by only one and itself, then it is a prime number.*/

$given_arr = [12, 34, 2, 6, 78];

// Given Array Type : Indexed Array.

#NOTE : condition is started from 2, because 1 doesn't meet the condition rules

foreach ( $given_arr as $value ) {
    $numbers = $value;
    // all value is stored in a variable for next use
    $flag = 0;
    // $flag variable taken to check condition true or false
    for ( $i = 2; $i < $numbers; $i++ ) {
        if ( $numbers % $i == 0 ) {
            // if given numbers are divisible by 2 then value of flag will be 1
            $flag = 1;
            break;
        }

    }
    // if value of flag is remain zero then it proves that number is not divisible by 2
    if ( $flag == 0 ) {
        echo $numbers . " is a prime Number" . "<br>";
    }
    // whereas, this program need to show only prime number, so other values are omited.
}

/*
Question 02:

Let’s think about a use case, Daraz admin’s have some products for uploads on their e-commerce site. So make an array of products which contains 5 products.
Go to daraz website and pick any 5 products and make your array.
Must mention Which type of array you have made */

// I have created =  Multidimensional Associative Array

$daraz_products = [

    'product_01' => ['product Name' => 'Eid Panjabi', 'size' => 'XL', 'color' => 'Merun', 'price' => '1800'],
    'product_02' => ['product Name' => 'Mini Backpack', 'size' => 'Medium', 'color' => 'crimson', 'price' => '1200'],
    'product_03' => ['product Name' => 'Phone Holder', 'Material' => 'ABS', 'color' => 'Black', 'price' => '450'],
    'product_04' => ['product Name' => 'Lenovo Blutooth Headphone', 'Type' => 'Neck Band', 'color' => 'Ashgray', 'price' => '750'],
    'product_05' => ['product Name' => 'Havit Portable Speaker', 'speaker Type' => 'portable', 'color' => 'Red', 'price' => '930'],

];
// we can see in the browser in well organised formate by
//echo "<pre>";
//print_r( $daraz_products );

/* Question 03:
This is an array array(0,10,80,67,60,89,91,56,45,30,95,83,99)
Find the maximum value from this array.
Must use a foreach loop */

$arr = [0, 10, 80, 67, 60, 89, 91, 56, 45, 30, 95, 83, 99];
foreach ( $arr as $value ) {

    if ( $value == max( $arr ) ) {
        echo "Maximum value of this Array = " . $value;

    }

}

/* Question 04:

Let’s traverse this array(0,10,80,67,60,89,91,56,45,30,95,83,99)
and print 0 index then skip 1 index again print 2 skip 3… */

$skip_arr = [0, 10, 80, 67, 60, 89, 91, 56, 45, 30, 95, 83, 99];

foreach ( $skip_arr as $key => $val ) {
    // when we need ot print index nuber skipping next index
    if ( $key % 2 == 0 ) {
        echo $key . "<br>";

        // Note: whereas, program needs to show only index . we could print index with value using  (echo $key . " => " . $val . "<br>";)

    }
}