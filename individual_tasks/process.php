<?php $title = "Exercise 3: Out Put" ;
 include 'header.php' ?>
    <?php
        $fname = $_POST["firstName"];
        $lname = $_POST["lastName"];

        echo "Hello ". $fname . " " . $lname . "," . " You are welcome to my site.";

    ?>
<?php include 'footer.php' ?>