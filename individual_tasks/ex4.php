<?php $title = "Exercise 04" ;
 include 'header.php' ?>

<h3>4.2 If-Else: Write a PHP script to get inputs (age and name) from the 
    user and based on their age, decide if he/she is eligible for voting. 
    (18 or more than 18 years is eligible for voting).
</h3>
    <form method="post" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>>
    <div class="form-group">
        <label for="formGroupExampleInput">Name :</label>
        <input type="text" class="form-control" id="formGroupExampleInput" name="name" placeholder="Enter your name" required>
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Age :</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" name="age" placeholder="Enter your age" required>
    </div>
    <div class = "mt-2">
    <input type="submit" value="Submit" class = "btn">
    </div>
    
</form>

<br/>
    <?php
    //Processing data of the form in the same page
    //Check for a post request
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $name = $_POST["name"];
        $age = $_POST["age"];

        if($age > 18)
        {
            echo "Eligible for voting";
        }
        else
        {
            echo "Not eligible for voting";
        }
    }

    ?>

<br/><br/>

<h3>4.3 Switch Case: Write a PHP script that gets the current month and prints one of the following responses, 
    depending on whether it's August or not: It's August, so it's still holiday.
    Not August, this is Month-name so I don't have any holidays
    Hint: You can use date(F) function to get the current month name. Check Date function from the php manual page.
</h3> 
    <?php
        $month = date("F");
         switch ($month)
        {
            case "January":
            echo "Not August, this is " . $month . ", so I don't have any holidays.";
            break;

            case "February":
            echo "Not August, this is " . $month . ", so I don't have any holidays.";
            break;

            case "March":
            echo "Not August, this is " . $month . ", so I don't have any holidays.";
            break;

            case "April":
            echo "Not August, this is " . $month . ", so I don't have any holidays.";
            break;

            case "May":
            echo "Not August, this is " . $month . ", so I don't have any holidays.";
            break;

            case "June":
            echo "Not August, this is " . $month . ", so I don't have any holidays.";
            break;

            case "July":
            echo "Not August, this is " . $month . ", so I don't have any holidays.";
            break;

            case "August":
            echo "It's " . $month . "," . " so it's still holiday.";
            break;

            case "September":
            echo "Not August, this is " . $month . ", so I don't have any holidays.";
            break;

            case "October":
            echo "Not August, this is " . $month . ", so I don't have any holidays.";
            break;

            case "November":
            echo "Not August, this is " . $month . ", so I don't have any holidays.";
            break;

            case "December":
            echo "Not August, this is " . $month . ", so I don't have any holidays.";
            break;

        } 
    ?>



<br/><br/>

<h3>4.4 For Loop: Write a PHP script that will print the multiplication table 
    of a number (n).
</h3>

    <form>
        <div class="row">
            <div class="col">
                <label for="formGroupExampleInput3">Number for multiplication table :</label>
                <input type="text" class="form-control" placeholder="First name">
            </div>
            <div class="col">
                <label for="formGroupExampleInput4">Give the tmultiplication untill</label>
                <input type="text" class="form-control" placeholder="Last name">
            </div>
        </div>
    </form>
    <?php
        $n = 12;
        $j = 1;
        
        for($i = 2; $j <= $n; $j++)
        {
             $answer = $i * $j ;
             echo $i . " * " . $j . " = " . $answer . " " . "<br/>";     
        }
    ?>

<br/><br/>

<h3>4.5 While Loop: Write a PHP script that will print all the 
    numbers from 1 to n.
</h3>
    <?php
        $n = 20;
        $i = 1;
        while($i <= $n)
        {
            echo $i . " ";
            $i++;
        }
    ?>

<br/><br/>

<h3>4.6 Foreach Loop: Write a PHP script that will 
    print all the elements of an array.
</h3>
    <?php
        $arrayTechie = array("HTML", "CSS", "PHP", "JavaScript");

        foreach($arrayTechie as $value)
        {
            echo $value . "<br/>";
        }
    ?>


<br/><br/>

<?php include 'footer.php' ?>