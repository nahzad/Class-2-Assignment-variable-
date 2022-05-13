<?php
/*
====================================
Problem No: 01
====================================
Let’s make an exam question set (add at list 10 dummy question) like that
$questionSet = [

['question' => 'What is loream ipsum?',
'options' => ['ans1', 'ans2', 'ans3', 'ans4']
],

['question' => 'What is loream ipsum?',
'options' => ['ans1', 'ans2', 'ans3', 'ans4']
],

['question' => 'What is loream ipsum?',
'options' => ['ans1', 'ans2', 'ans3', 'ans4']
]

];
Make a simple exam design using html css
Then make a exam by using these questions
Your questions must be come randomize order
*/

echo "<h4>Problem NO: 01</h4>"; # for showing problem no in output page 
?>


<!doctype html>
<html lang="en">

<head>
    <title>Assignment Class 07</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e9a47e202b.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="wrapper ">
        <h2 class="text-center mb-5">MCQ For Bootstrap</h2>
        <div class="container shadow">
            <div class="row">
                <div class="col">
                    <?php
                    #Question set starts here -----------------
                    $questionSet = [

                        [
                            'question' => 'Who developed the bootstrap?',
                            'options' => ['James Goslign', 'Mark Jukervich', 'Dennis Ritchie', 'Mark Otto and Jacob Thornton']
                        ],

                        [
                            'question' => 'Is Bootstrap 5 mobile-first?',
                            'options' => ['True', 'False', 'Can\'t say', 'May be']
                        ],

                        [
                            'question' => 'Which of the following class in Bootstrap is uesd to provide a responsive fixed width container?',
                            'options' => ['.container-fixed', '.container-fluid', '.container', 'All of the above']
                        ],
                        [
                            'question' => 'How many columns are allowed in a bootstrap grid system?',
                            'options' => ['2', '12', '3', '5']
                        ],
                        [
                            'question' => 'Which of the following class in bootstrap is used to create a big box for calling extra attention?',
                            'options' => ['.box', '.container', '.container-fluid', '.jumbotron']
                        ],
                        [
                            'question' => 'Which of the following class is used to create a black navigation bar?',
                            'options' => ['.navbar-default', '.navbar-inverse', '.navbar-black', '.navbar-dark']
                        ],
                        [
                            'question' => 'The plugin used to create a cycle through elements as a slideshow is -',
                            'options' => ['slideshow', 'scrollspy', 'carousel', 'None of the above']
                        ],
                        [
                            'question' => 'Which of the following class in Bootstrap is used to create a dropdown menu?',
                            'options' => ['.dropdown', '.select', '.select-list', 'None of the above']
                        ],
                        [
                            'question' => 'Which of the following class in bootstrap is used to create a basic list group?',
                            'options' => ['.grouped-list', '.select-list', '.list-group', '.list-grouped']
                        ],
                        [
                            'question' => 'The class used to shape an image to a circle is -',
                            'options' => ['.img-rounded', '.img-circle', '.img-rounded', 'None of the above']
                        ],


                    ];
                    #Question set ends here
                    ?>

                    <?php



                    shuffle($questionSet); #using shuffle to randomise question set 
                    #Outer foreach starts here
                    foreach ($questionSet as $key => $questions) {

                    ?>
                    <br>
                    <h5><?php echo 'Q' . ++$key . '. ' . $questions['question']; ?></h5>

                    <?php

                        $newArr = $questions['options']; #declaring newArr for itterate options as array
                        shuffle($newArr);
                        #Inner foreach starts
                        foreach ($newArr as $value) {
                        ?>
                    <input type="radio" name="ans"> <?php echo $value; ?> <br>
                    <?php
                        }
                        #Inner foreach ends here
                        ?>


                    <hr><!-- showing a separator line between every question set  -->

                    <?php
                    }
                    #Outer foreach ends here
                    ?>
                </div>
            </div>
        </div>
    </div>
    <br><br>




    <?php
    echo "<h4>Problem No : 02</h4>"; # for showing problem no in output page 
    /*============================
Question 02:
==============================
Let’s make a website which only contains our teams section.
Now create an array of our teams at least three elements and make the our team section dynamic using php.

Make an array of our teams including image
Make a section of our team by using html css
And dynamic the section by php*/

    echo "<hr>"; // showing horizontal line
    $our_team = [

        ["member_name" => "Jeffrey Rockenson", "designation" => "CEO,Founder", "thumbnail" => "media/person01.jpg"],
        ["member_name" => "Lioyd Wilson", "designation" => "Web Designer", "thumbnail" => "media/person02.jpg"],
        ["member_name" => "Rachel Parker", "designation" => "Web Developer", "thumbnail" => "media/person03.jpg"],
        ["member_name" => "Ian Smith", "designation" => "Graphic Designer", "thumbnail" => "media/person04.jpg"],

    ];
    ?>
    <section id="team" class="m-5">

        <div class="container">
            <div class="our-team-section">
                <div class="title text-center mb-5">

                    <h2 class=" font-weight-bolder mb-3">Our Leadership Team</h2>
                    <p class="text-muted text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo
                        enim
                        repudiandae iusto magni. Magni, amet.</p>
                </div>
                <div class="row">
                    <?php
                    // foreach starts here
                    foreach ($our_team as $key => $member) {

                    ?>
                    <div class="col-lg-3">
                        <div class="card text-center shadow">
                            <img class="card-img-top rounded-circle w-100 p-3 img-fluid"
                                src="<?php echo $member['thumbnail'] ?>" alt="member image">
                            <div class="card-body">
                                <h4 class="card-title "><?php echo $member['member_name']; ?></h4>
                                <h6 class="card-title text-muted mb-3"><?php echo $member['designation']; ?></h6>

                                <div class="fontawesome">
                                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fa-brands fa-reddit-alien"></i></a>
                                </div>

                            </div>
                        </div>
                    </div>

                    <?php

                        //foreach ends here
                    }

                    ?>

                </div>
            </div>
        </div>
    </section>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

</body>

</html>