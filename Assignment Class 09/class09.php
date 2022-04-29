<?php
/*
====================================================================
Question 01:

Practice class 9
Create a own design registration form
Practice all things which already done in class 9
===================================================================
 */

if ( isset( $_POST['submit'] ) ) {
    $name     = $_POST['name'];
    $email    = $_POST['email'];
    $password = $_POST['pass'];
    $phone    = $_POST['phone'];

    if ( $name == '' || $email == '' || $password == '' || $phone == '' ) {
        echo "All fields are required";
    } else {
        echo "Name:- {$name}<br>";
        echo "Email:- {$email}<br>";
        echo "Password:- {$password}<br>";
        echo "Phone:- {$phone}<br>";
    }

    echo "<br>";
    echo "<hr>";

}

?>

<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Personal Form Design</title>
    <style>
    .child-div {
        width: 600px;
        height: 400px;

    }
    </style>
</head>

<body>

    <div class="container mt-5">

        <div class="parent-div d-flex align-items-center justify-content-center">
            <div class="child-div ">
                <div class="row">
                    <div>

                        <form class=" shadow p-5 form form-control" action="" method="POST">

                            <h3 class="title text-center mb-3">Registration Form</h3>

                            <label class="form-label text-muted" for="name">Name : </label>
                            <input class="form-control" type="text" name="name" id="name">

                            <label class="form-label text-muted" for="email">Email : </label>
                            <input class="form-control" type="email" name="email" id="email">

                            <label class="form-label text-muted" for="pass">Password : </label>
                            <input class="form-control" type="Password" name="pass" id="pass">

                            <label class="form-label text-muted" for="phone">Phone Number : </label>
                            <input class="form-control" type="tell" name="phone" id="phone"><br><br>

                            <input class="btn btn-success mb-2" type="submit" name="submit" value="Send Data">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>