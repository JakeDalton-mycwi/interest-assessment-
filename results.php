<!doctype html>
<html lang="en">
    <head>
        <?php require 'connection.php';?>

        <meta charset="utf-8" />
        <title>Interest Assessment Results</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous" />
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous" />
        <!-- user edit css -->
        <link rel="stylesheet" type="text/css" href="css/results.css" />
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    </head>

    <body>
        <div class="container">
            <div class="jumbotron">
                <img id="logo" src="images/Logo.png" />   
                <div class="row text-center">
                    <h3>Results</h3>
                    <div class="col-lg-12">
                    </div>
                </div>
            </div>

            <?php
            $selectedAnswer1 = htmlspecialchars($_POST['answer1']);
            $selectedAnswer2 = htmlspecialchars($_POST['answer2']);
            $selectedAnswer3 = htmlspecialchars($_POST['answer3']);
            $selectedAnswer4 = htmlspecialchars($_POST['answer4']);
            $selectedAnswer5 = htmlspecialchars($_POST['answer5']);
            $email = htmlspecialchars($_POST['studentEmail']);
            $fName = htmlspecialchars($_POST['studentFName']);
            $lName = htmlspecialchars($_POST['studentLName']);
            $studentId = htmlspecialchars($_POST['studentId']);
            echo $selectedAnswer1 . "<br>" .  $selectedAnswer2  . "<br>". $selectedAnswer3  . "<br>". $selectedAnswer4  . "<br>". $selectedAnswer5  . "<br>". $email  . "<br>". $fName  . "<br>". $lName  . "<br>". $studentId;
            ?>

            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h4>Your test score:</h4>
                            <ul>
                                <li>You took the ___ test.</li>
                                <li>You got a 60%</li>
                            </ul>
                            <div class="text-right">
                                <button type="button" class="btn btn-default">Print Now</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h4>Instructor Info:</h4>
                            <ul>
                                <li>Billy Joel</li>
                                <li>(208)999-1234</li>
                                <li>BillyJ@mycwi.cc</li>
                            </ul>
                            <div class="text-right">
                                <button type="button" class="btn btn-default">Email Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    <h3 class="panel-title">Your Test</h3>
                </div>
                <div class="panel-body">
                    <h4>Question 1</h4>
                    <p>What is blah blah of the bloborian root of blah?   <span class="glyphicon glyphicon-ok"> </span></p>
                    <h4>Question 2</h4>
                    <p>What is blah blah of the bloborian root of blah?   <span class="glyphicon glyphicon-remove"> </span></p>
                </div>
            </div>
        </div> <!-- closes container -->
    </body>
</html>
