<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Form</title>
</head>
<body>
        <?php
            error_reporting (E_ALL ^ E_NOTICE);
            $fname=$_POST['fname']."<br>";
            echo "Your first name is ".$fname;
            $lname=$_POST['lname'];
            echo "Your last name is ".$lname."<br>";
            $age=$_POST['age'];
            echo "your age is ".$age."<br>";
            $job=$_POST['job'];
            echo "your designation is ".$job[0]."<br>";
            $pl=$_POST['pl'];
            echo "your preffered language is ".$pl[0]." and ".$pl[1]."<br>";
            $mail=$_POST['mail'];
            echo "Your Email is ".$mail."<br>";
            $pass=$_POST['pass'];
            echo "Your password is ".$pass."<br>";
            $files=$_POST['files'];
            echo "The name of the file you have uploaded is-".$files;
        ?>
</body>
</html>