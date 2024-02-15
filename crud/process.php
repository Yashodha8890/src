<?php
//Adding codes that should do

    if(isset($_POST['submit']))
    {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $city = $_POST['city'];
        $groupId = $_POST['groupid'];

        //connecting to DB service
        include 'db.php';

        //Write SQL statement to add data to the table
        $sql="insert into studentsinfo(fname,lname,city,groupId) values('$fname','$lname','$city','$groupId')";
        //$sql="insert into studentsinfo (fname, lname, city, groupid) values('$fname', '$lname', '$city', '$groupid')";

        if($conn -> query($sql)==TRUE)
        {
            echo "You data was saved.";
        }

        else
        {
            echo "Error" . $sql . "<br>" . $conn -> error;
        }    

        //closing the opened db connection
        $conn->close();
    }

?>
