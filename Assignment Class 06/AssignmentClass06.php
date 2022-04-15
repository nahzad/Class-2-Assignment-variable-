<?php

/*=====================================
Question 01:
======================================*/

/*You have purchased some items from a supershop. Purchase product array is given below-

$purchased_products = array(

array('name' => 'banana', 'qty' => 10,'total_price' => 550),

array('name' => 'apple',  'qty' => 50,'total_price' => 1500),

array('name' => 'orange', 'qty' => 7, 'total_price' => 600),

);

How much product quantity you have purchased (total purchased qty = 67)

Calculate the total amount of all purchased items (total amount = 2650 tk).*/
echo "<h3>Question  : 01</h3>";

$purchased_products = [

    ['name' => 'banana', 'qty' => 10, 'total_price' => 550],

    ['name' => 'apple', 'qty' => 50, 'total_price' => 1500],

    ['name' => 'orange', 'qty' => 7, 'total_price' => 600],

];

foreach ( $purchased_products as $key => $value ) {

    echo ++$key . "  ";

    foreach ( $value as $col ) {
        echo "--" . $col . " ";
    }
    echo "<br>";
}

echo "--------------------------<br>";

echo " total purchased qty = " . array_sum( array_column( $purchased_products, 'qty' ) ) . " , ";

echo " total amount = " . array_sum( array_column( $purchased_products, 'total_price' ) );

echo "<hr>"; // for showing horizontal line----------------------------------------------------------------------------

/*=====================================
Question 02:
======================================*/

/*You have two array of emails, these are given below-

$first_email_array = ["abc@gmail.com", "xyz@gmail.com", "demo@gmail.com"];

$second_email_array = ["efg@gmail.com", "xyz@gmail.com", "dummy@gmail.com"];

You have to make a single array from this two arrays

And don’t keep any value in multiple time*/

echo "<h3>Question  : 02</h3>";

$first_email_array = ["abc@gmail.com", "xyz@gmail.com", "demo@gmail.com"];

$second_email_array = ["efg@gmail.com", "xyz@gmail.com", "dummy@gmail.com"];

$new_Merged_array = array_merge( $first_email_array, $second_email_array );

$filtered_array = array_unique( $new_Merged_array );

foreach ( $filtered_array as $key => $value ) {
    echo $key . " => " . $value . "<br>";
}

echo "<hr>"; // for showing horizontal line----------------------------------------------------------------------------

/*=====================================
Question 03:
======================================*/

/*$citylist = array( "Black Canyon City", "Chandler", "Flagstaff", "Gilbert", "Glendale", "Globe", "Mesa", "Miami", "Phoenix", "Peoria", "Prescott", "Scottsdale", "Sun City", "Surprise", "Tempe", "Tucson", "Wickenburg" );

Split this given array into chunks 4*/

echo "<h3>Question  : 03</h3>";

$citylist = ["Black Canyon City", "Chandler", "Flagstaff", "Gilbert", "Glendale", "Globe", "Mesa", "Miami", "Phoenix", "Peoria", "Prescott", "Scottsdale", "Sun City", "Surprise", "Tempe", "Tucson", "Wickenburg"];

$newCityList = array_chunk( $citylist, 4 );

foreach ( $newCityList as $key => $value ) {

    echo "Index No = " . $key . "  ";

    foreach ( $value as $city ) {

        echo "<li>" . $city . "</li>"; //for only better presentation I use li tag.
    }
}

echo "<hr>"; // for showing horizontal line----------------------------------------------------------------------------
echo "<br>"; // Creating spaces only

?>