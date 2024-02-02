<?php $title = "Exercise 3: Variable, Strings & Operators" ;
 include 'header.php' ?>

<h3>3.2 Form Creation: Create a simple HTML form to collect the user’s Firstname and Lastname. 
    Use the echo statement to print “Hello [Firstname] [Lastname], You are welcome to my site.” inside an (Heading 3) tag.
</h3>

<form method="post" action="process.php">
    <label for="staticInput" class="form-label">First Name :</label>
        <input type="text" name="firstName" required> <br><br>
    <label for="staticInput" class="form-label">Last Name :</label>
        <input type="text" name="lastName" required> <br><br>
    <input type="submit" value="Submit">
</form>
<br>

<h3>3.4 HTML Table: Prepare a simple HTML table and apply Bootstrap 
    styles to it. Note, you have already done a table in Exercise 1.
     If you wish, you can use the same table.</h3>

     <table>
        <tr><th>Student Id</th> <th>Name</th> <th>Grade</th></tr>
        <tr>
            <td>1</td>
            <td>John</td>
            <td><?php 5 ?></td>
        </tr>

        <tr>
            <td>2</td>
            <td>Alice</td>
            <td><?php 4 ?></td>
        </tr>

        <tr>
            <td>3</td>
            <td>Bob</td>
            <td><?php echo 3 ?></td>
        </tr>
    </table>
    <br>

    <h3>3.5 String Variables: Write a PHP script with two string variables
         ($str1 = "Hello"; $str2 = "World";). 
        Join them together and print the length of the string.</h3>

        <?php
            $string1 = "Hello";
            $string2 = "world";
            $string3 = $string1. " " . $string2;            
            echo "String is :" . $string3 . "." . " " . "The length of the string is : " . strlen($string3);
        ?>
    <br><br>

    <h3>3.6 Number Addition: Write a script to add up the numbers: 298, 234, 46.
         Use variables to store these numbers and an echo statement to output 
         your answer.
    </h3>

        <?php 
            $number1 = 298;
            $number2 = 234;
            $number3 = 46;

            $total = $number1 + $number2 + $number3;

            echo "Sum of these three numbers (298 + 234 + 46) is " . $total . " .";
        ?>
    <br><br>

    <h3>3.7 Browser Detection: Write a PHP script to detect the browser being used to view your 
        pages. (Hint: Use predefined variables: $_SERVER).
    </h3>

        <?php
        echo "Server is : " . $_SERVER['SERVER_NAME'];
        ?>
    <br><br>

    <h3>File Modification Time: Write a PHP script in the footer section of your universal footer 
        to display the last modification time of a file. 
        Hint: Use predefined variable $_SERVER, basename function  
        to get the filename , filetime function to get the last modified time & 
        date function to print the date and time Predefined Variables </h3>

      <!--   <?php
            echo $_SERVER['SERVER_NAME'];
        ?>
 -->

<?php include 'footer.php' ?>